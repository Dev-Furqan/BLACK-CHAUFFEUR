<?php
require_once __DIR__ . "/includes/config.php";
require_once __DIR__ . "/includes/db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$email = "";
$errors = [];

function redirect_to($path) {
  header("Location: " . $path);
  exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = trim($_POST["email"] ?? "");
  $password = (string)($_POST["password"] ?? "");

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email.";
  }
  if ($password === "") {
    $errors[] = "Password is required.";
  }

  if (!$errors) {
    try {
     $stmt = $pdo->prepare("SELECT id, full_name, email, password_hash, email_verified FROM users WHERE email = ? LIMIT 1");
      $stmt->execute([$email]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      // If your column name is `is_verified`, use this instead:
      // $stmt = $pdo->prepare("SELECT id, email, password_hash, is_verified AS email_verified, otp_last_sent_at FROM users WHERE email = ? LIMIT 1");

      if (!$user) {
        $errors[] = "Invalid email or password.";
      } else {
        // Block login if not verified
        if ((int)$user["email_verified"] === 0) {
          $_SESSION["verify_email"] = $email;
          redirect_to("verify.php");
        }

        // Check password
        if (!password_verify($password, $user["password_hash"])) {
          $errors[] = "Invalid email or password.";
        } else {
          // Success -> session login
       $_SESSION["user_id"] = (int)$user["id"];
$_SESSION["user_email"] = $user["email"];
$_SESSION["user_name"] = $user["full_name"] ?? "";
$_SESSION["logged_in"] = true;


          redirect_to("index.php"); // change to dashboard.php if needed
        }
      }
    } catch (Throwable $e) {
      $errors[] = "Login failed: " . $e->getMessage();
    }
  }
}

require_once __DIR__ . "/includes/header.php";
?>

<link rel="stylesheet" href="assets/css/pages/auth.css">

<section class="authPage">
  <div class="authCard">
    <div class="authBrand">BLACK CHAUFFEUR-KSA</div>

    <h1 class="authTitle">Login</h1>

    <?php if (!empty($errors)): ?>
      <div class="authAlert authAlert--err">
        <?php foreach ($errors as $err): ?>
          <div>• <?= htmlspecialchars($err) ?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="authForm" novalidate>
      <label class="authLabel">Email Address *</label>
      <input class="authInput" type="email" name="email" value="<?= htmlspecialchars($email) ?>" required>

      <label class="authLabel">Password *</label>
      <input class="authInput" type="password" name="password" required>

      <button class="authBtn" type="submit">Login</button>
    </form>

    <div class="authSmall">
      Don’t have an account? <a class="authLink" href="register.php">Register</a>
    </div>

    <div class="authNote">Login to continue to Black chauffeur.</div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
