<?php
require_once __DIR__ . "/includes/config.php";
require_once __DIR__ . "/includes/db.php";
require_once __DIR__ . "/includes/mailer.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) session_start();

$errors = [];
$full_name = "";
$email = "";
$phone = "";

// Helpers
function redirect_to(string $path) {
  header("Location: " . $path);
  exit;
}
function now_dt(): string {
  return date('Y-m-d H:i:s');
}
function dt_plus_minutes(int $mins): string {
  return date('Y-m-d H:i:s', time() + ($mins * 60));
}
function make_otp(): string {
  return (string) random_int(100000, 999999);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $full_name = trim($_POST["full_name"] ?? "");
  $email = trim($_POST["email"] ?? "");
  $phone = trim($_POST["phone"] ?? "");
  $password = (string)($_POST["password"] ?? "");

  // Validation
  if ($full_name === "") $errors[] = "Full name is required.";
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Please enter a valid email address.";
  if ($phone === "") $errors[] = "Phone is required.";
  if (strlen($password) < 6) $errors[] = "Password must be at least 6 characters.";

  if (!$errors) {
    try {
      // IMPORTANT:
      // If your verified column is `is_verified`, replace `email_verified` with `is_verified`
      // in BOTH queries below.

      // 1) Check existing user
      $stmt = $pdo->prepare("SELECT id, email_verified, otp_last_sent_at FROM users WHERE email = ? LIMIT 1");
      $stmt->execute([$email]);
      $existing = $stmt->fetch(PDO::FETCH_ASSOC);

      // If already verified -> go login
      if ($existing && (int)$existing["email_verified"] === 1) {
        redirect_to("login.php");
      }

      // 2) Generate OTP + expiry
      $otp = make_otp();
      $otpExpires = dt_plus_minutes(10);
      $otpSentAt  = now_dt();

      // 3) If exists but not verified -> cooldown + update OTP
      if ($existing && (int)$existing["email_verified"] === 0) {

        // 60s cooldown
        if (!empty($existing["otp_last_sent_at"])) {
          $diff = time() - strtotime($existing["otp_last_sent_at"]);
          if ($diff < 60) {
            $_SESSION["verify_email"] = $email;
            redirect_to("verify.php");
          }
        }

        $up = $pdo->prepare("
          UPDATE users
          SET full_name = ?, phone = ?,
              otp_code = ?, otp_expires_at = ?, otp_last_sent_at = ?
          WHERE email = ?
        ");
        $up->execute([$full_name, $phone, $otp, $otpExpires, $otpSentAt, $email]);

      } else {
        // 4) Create new user
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $ins = $pdo->prepare("
          INSERT INTO users
            (full_name, email, phone, password_hash, email_verified, otp_code, otp_expires_at, otp_last_sent_at)
          VALUES
            (?, ?, ?, ?, 0, ?, ?, ?)
        ");
        $ins->execute([$full_name, $email, $phone, $hash, $otp, $otpExpires, $otpSentAt]);
      }

      // 5) Send OTP Email
      $subject = "Your Black Chauffeur-KSA Verification Code";
      $message = "Your verification code is: {$otp}\n\nThis code expires in 10 minutes.";

      // This function MUST exist in includes/mailer.php
      $sent = send_email_smtp($email, $subject, $message);

      if (!$sent) {
        $errors[] = "Unable to send OTP email. Check SMTP settings / Gmail App Password.";
      } else {
        $_SESSION["verify_email"] = $email;
        redirect_to("verify.php");
      }

    } catch (Throwable $e) {
      $errors[] = "Registration failed: " . $e->getMessage();
    }
  }
}

require_once __DIR__ . "/includes/header.php";
?>

<link rel="stylesheet" href="assets/css/pages/auth.css">

<section class="authPage">
  <div class="authCard">
    <div class="authBrand">BLACK CHAUFFEUR-KSA</div>

    <h1 class="authTitle">Create Your Account</h1>

    <?php if (!empty($errors)): ?>
      <div class="authAlert authAlert--err">
        <?php foreach ($errors as $err): ?>
          <div>• <?= htmlspecialchars($err) ?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="authForm" novalidate>
      <label class="authLabel">Full Name *</label>
      <input class="authInput" type="text" name="full_name" value="<?= htmlspecialchars($full_name) ?>" required>

      <label class="authLabel">Email Address *</label>
      <input class="authInput" type="email" name="email" value="<?= htmlspecialchars($email) ?>" required>

      <label class="authLabel">Password *</label>
      <input class="authInput" type="password" name="password" required>

      <label class="authLabel">Phone *</label>
      <input class="authInput" type="text" name="phone" value="<?= htmlspecialchars($phone) ?>" required>

      <button class="authBtn" type="submit">Continue</button>
    </form>

    <div class="authSmall">
      Already have an account? <a class="authLink" href="login.php">Login</a>
    </div>

    <div class="authNote">Sign Up to continue to Black chauffeur.</div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
