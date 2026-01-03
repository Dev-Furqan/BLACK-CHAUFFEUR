<?php
require_once __DIR__ . "/includes/config.php";
require_once __DIR__ . "/includes/db.php";

if (session_status() === PHP_SESSION_NONE) session_start();
if (empty($_SESSION["user_id"])) { header("Location: login.php"); exit; }

$userId = (int)$_SESSION["user_id"];
$errors = [];
$success = "";

$stmt = $pdo->prepare("SELECT id, full_name, email, phone FROM users WHERE id = ? LIMIT 1");
$stmt->execute([$userId]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$user) { header("Location: logout.php"); exit; }

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $full_name = trim($_POST["full_name"] ?? "");
  $phone = trim($_POST["phone"] ?? "");

  if ($full_name === "") $errors[] = "Name is required.";
  if ($phone === "") $errors[] = "Phone is required.";

  if (!$errors) {
    $up = $pdo->prepare("UPDATE users SET full_name = ?, phone = ? WHERE id = ?");
    $up->execute([$full_name, $phone, $userId]);

    $_SESSION["user_name"] = $full_name;
    $success = "Profile updated successfully.";

    $stmt->execute([$userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
  }
}

require_once __DIR__ . "/includes/header.php";
?>

<link rel="stylesheet" href="assets/css/pages/auth.css">

<section class="authPage">
  <div class="authCard">
    <div class="authBrand">BLACK CHAUFFEUR-KSA</div>
    <h1 class="authTitle">Profile</h1>

    <?php if ($success): ?>
      <div class="authAlert authAlert--ok"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
      <div class="authAlert authAlert--err">
        <?php foreach ($errors as $err): ?><div>• <?= htmlspecialchars($err) ?></div><?php endforeach; ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="authForm">
      <label class="authLabel">Full Name</label>
      <input class="authInput" type="text" name="full_name" value="<?= htmlspecialchars($user["full_name"] ?? "") ?>" required>

      <label class="authLabel">Email (readonly)</label>
      <input class="authInput" type="email" value="<?= htmlspecialchars($user["email"]) ?>" readonly>

      <label class="authLabel">Phone</label>
      <input class="authInput" type="text" name="phone" value="<?= htmlspecialchars($user["phone"] ?? "") ?>" required>

      <button class="authBtn" type="submit">Save Changes</button>
    </form>

    <div class="authSmall">
      <a class="authLink" href="logout.php">Logout</a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . "/includes/footer.php"; ?>
