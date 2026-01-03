<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

function redirect_to(string $path): void {
  if (defined('BASE_URL')) {
    $path = '/' . ltrim($path, '/');
    header("Location: " . rtrim(BASE_URL, '/') . $path);
    exit;
  }
  header("Location: {$path}");
  exit;
}
