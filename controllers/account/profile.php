<?php

if(!$user) {
  header("Location: ".BASE_URL."auth/login");
  exit();
}

$token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;
if($token !== null) {
  $session = getSession($token);
  
  if($session !== null) {
    $uid = $session['id_user'];
    $user = getUserById($uid);

    if(!$user) {
      unset($_SESSION['token']);
      setcookie('token', '', time() - 1, '/');
      deleteSession($token);

      header("Location: ".BASE_URL."auth/login");
      exit();
    } 
  }
}

$articles = getArticlesByUserId($user['id_user']);

$pageTitle = "Profile";

$left = template('account/v_profile_left', [
  'user' => $user,
]);

$content = template('account/v_profile', [
  'articles' => $articles,
]);

$pageContent = template('base/v_con2col', [
  'left' => $left,
  'content' => $content,
]);

