<?php
$errors = [];


if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  $remember = isset($_POST['remember']);

  if($username !== '' && $password !== '') {
    $checkUser = getUser($username);

    if($checkUser !== null && password_verify($password, $checkUser['password'])) {
      $token = substr(bin2hex(random_bytes(128)), 0, 128);

      $user = getUserByUsername($username);

      $uid = $user['id_user'];
      $_SESSION['token'] = $token;

      addSession($uid, $token);

      if($remember) {
        setcookie('token', $token, time() + 3600 * 3, BASE_URL);
      }

      header("Location: ".BASE_URL);
      exit();
      
    } else {
      $errors[] = "Username or Password is invalid";
    }
  } else {
    $errors[] = "Fill in all the fields";
  }

} else {
  $errors = [];
}

$pageTitle = 'Sign In';
$pageContent = template('auth/v_login', [
  'errors' => $errors,
]);
