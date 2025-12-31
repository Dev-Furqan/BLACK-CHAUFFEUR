<?php require_once __DIR__ . "/config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= SITE_NAME ?></title>
  <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/main.css" />
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
    <div class="topbar__actions">
      <a href="<?= BASE_URL ?>/auth/login.php" class="topbar__btn topbar__btn--login">Login</a>
      <a href="<?= BASE_URL ?>/auth/register.php" class="topbar__btn topbar__btn--register">Register</a>
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
