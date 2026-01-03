<?php
require_once __DIR__ . "/includes/config.php";
require_once __DIR__ . "/includes/auth.php";
require_once __DIR__ . "/includes/header.php";

$email = $_SESSION['verify_email'] ?? null;
if (!$email) {
  redirect_to('/register.php');
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $code = trim($_POST['otp'] ?? '');

  $stmt = $pdo->prepare("
    SELECT id, otp_code, otp_expires_at 
    FROM users 
    WHERE email = ?
  ");
  $stmt->execute([$email]);
  $user = $stmt->fetch();

  if (!$user) {
    $error = "Invalid request.";
  } elseif ($user['otp_code'] !== $code) {
    $error = "Invalid verification code.";
  } elseif (strtotime($user['otp_expires_at']) < time()) {
    $error = "Code expired. Please resend.";
  } else {
    // SUCCESS
    $stmt = $pdo->prepare("
      UPDATE users 
      SET email_verified = 1, otp_code = NULL, otp_expires_at = NULL 
      WHERE id = ?
    ");
    $stmt->execute([$user['id']]);

    unset($_SESSION['verify_email']);
    redirect_to('/login.php');
  }
}
?>

<link rel="stylesheet" href="assets/css/pages/auth.css">

<section class="authPage">
  <div class="authCard">

    <h1 class="authTitle">Verify Your Identity</h1>

    <p class="authNote">
      We've sent an email with your code to:<br>
      <strong><?= htmlspecialchars($email) ?></strong>
    </p>

    <?php if ($error): ?>
      <div class="authAlert authAlert--err"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="POST" class="authForm">
      <label class="authLabel">Enter the 6-digit code *</label>
      <input 
        class="authInput authInput--otp"
        type="text"
        name="otp"
        maxlength="6"
        inputmode="numeric"
        pattern="[0-9]{6}"
        required
      >

      <button class="authBtn">Continue</button>
    </form>

    <div class="authSmall">
      Didn’t receive a code?
      <a class="authLink" href="resend-otp.php">Resend</a>
    </div>

    <div class="authSmall">
      <a class="authLink" href="register.php">Go back</a>
    </div>

  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
