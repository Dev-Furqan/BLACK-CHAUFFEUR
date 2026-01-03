<?php
// Site basic settings
define("SITE_NAME", "Black Chauffeur");
define("BASE_URL", "http://localhost/blackchauffeur-ksa");
define("CURRENCY", "SAR");
date_default_timezone_set("Asia/Riyadh");
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USER', 'syedfurqan1887@gmail.com');
define('SMTP_PASS', 'futf aowo xkqh nmdh'); // NOT normal password
define('SMTP_FROM_EMAIL', 'syedfurqan1887@gmail.com');
define('SMTP_FROM_NAME', 'Syed Furqan');




$host = "localhost";
$db   = "blackchauffeur";
$user = "root";
$pass = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);
?>

