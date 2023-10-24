<?php


if($user) {
  $token = $_SESSION['token'] ?? $_COOKIE['token'] ?? '';
  unset($_SESSION['toke']);
  setcookie('token', '', time() - 1, BASE_URL);
  deleteSession($token);

  header("Location: ".BASE_URL);
  exit();
} else {
  header("Location: ".BASE_URL."auth/login");
  exit();
}