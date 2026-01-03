<?php require_once __DIR__ . "/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= SITE_NAME ?></title>
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>

<header class="topbar">
  <div class="container topbar__inner">

    <!-- Left spacer / optional logo -->
    <div class="brand">
     
      <a class="brand__name" href="<?= BASE_URL ?>/">BLACK CHAUFFEUR-KSA</a>
    </div>

    <!-- Center nav -->
    <nav class="nav" aria-label="Primary navigation">
      <a href="<?= BASE_URL ?>/" class="nav__link is-active">Home</a>
      <a href="<?= BASE_URL ?>/fleets.php" class="nav__link">Our Fleets</a>
      <a href="<?= BASE_URL ?>/services.php" class="nav__link">Our Services</a>
      <a href="<?= BASE_URL ?>/about.php" class="nav__link">About us</a>
      <a href="<?= BASE_URL ?>/partner.php" class="nav__link">Partner with us</a>
    </nav>

    <!-- Right actions -->
  <?php
if (session_status() === PHP_SESSION_NONE) session_start();

$isLoggedIn = !empty($_SESSION["user_id"]);
$displayName = trim($_SESSION["user_name"] ?? "");
if ($displayName === "") $displayName = $_SESSION["user_email"] ?? "Account";
?>

<div class="hdrRight">
  <?php if (!$isLoggedIn): ?>
    <a class="btn btn--ghost" href="<?= BASE_URL ?>/login.php">Login</a>
    <a class="btn btn--solid" href="<?= BASE_URL ?>/register.php">Register</a>
  <?php else: ?>
    <div class="userMenu" id="userMenu">
      <button class="userMenu__btn" type="button" id="userMenuBtn" aria-haspopup="true" aria-expanded="false">
        <span class="userMenu__avatar"><?= strtoupper(substr($displayName, 0, 1)) ?></span>
        <span class="userMenu__name"><?= htmlspecialchars($displayName) ?></span>
        <span class="userMenu__chev">▾</span>
      </button>

      <div class="userMenu__drop" id="userMenuDrop" role="menu">
        <a href="<?= BASE_URL ?>/profile.php" class="userMenu__item" role="menuitem">View / Edit Profile</a>
        <a href="<?= BASE_URL ?>/logout.php" class="userMenu__item userMenu__item--danger" role="menuitem">Logout</a>
      </div>
    </div>

    <script>
      (function () {
        const btn = document.getElementById("userMenuBtn");
        const drop = document.getElementById("userMenuDrop");
        if (!btn || !drop) return;

        function closeMenu() {
          drop.classList.remove("is-open");
          btn.setAttribute("aria-expanded", "false");
        }

        btn.addEventListener("click", function (e) {
          e.stopPropagation();
          const open = drop.classList.toggle("is-open");
          btn.setAttribute("aria-expanded", open ? "true" : "false");
        });

        document.addEventListener("click", closeMenu);
        document.addEventListener("keydown", function (e) {
          if (e.key === "Escape") closeMenu();
        });
      })();
    </script>
  <?php endif; ?>
</div>

    

    <!-- Mobile toggle -->
    <button class="navToggle" type="button" aria-label="Toggle menu" id="navToggle">☰</button>

  </div>

  <!-- Mobile menu -->
  <div class="mobileNav" id="mobileNav">
    <div class="mobileNav__inner">
      <a href="<?= BASE_URL ?>/" class="mobileNav__link">Home</a>
      <a href="<?= BASE_URL ?>/fleets.php" class="mobileNav__link">Our Fleets</a>
      <a href="<?= BASE_URL ?>/services.php" class="mobileNav__link">Our Services</a>
      <a href="<?= BASE_URL ?>/about.php" class="mobileNav__link">About us</a>
      <a href="<?= BASE_URL ?>/partner.php" class="mobileNav__link">Partner with us</a>
      <a href="<?= BASE_URL ?>/contact.php" class="mobileNav__link">Contact Us</a>

      <div class="mobileNav__actions">
        <a href="<?= BASE_URL ?>/auth/login.php" class="topbar__btn topbar__btn--login">Login</a>
        <a href="<?= BASE_URL ?>/auth/register.php" class="topbar__btn topbar__btn--register">Register</a>
      </div>
    </div>
  </div>
</header>

<script>
  (function(){
    var btn = document.getElementById("navToggle");
    var mobile = document.getElementById("mobileNav");
    if(!btn || !mobile) return;
    btn.addEventListener("click", function(){
      mobile.classList.toggle("is-open");
    });
  })();
</script>
