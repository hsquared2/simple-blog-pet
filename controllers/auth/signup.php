<?php

if($user) {
  header("Location: ".BASE_URL);
  exit();
}


$fields = ['name' => '', 'username' => '', 'email' => ''];
$errors = [];
$userCanRegister = false;
$userOccupied = [];


if($_SERVER['REQUEST_METHOD'] == "POST") {
  $requiredFields = ['name', 'username', 'email', 'password', 'password_rpt'];
  $fields = extractFields($_POST, $requiredFields);
  $errors = validateRegistrationFields($fields);

  if(empty($errors)) {
    $checkUsername = getUserByUsername($fields['username']);
    $checkEmail = getUserByEmail($fields['email']);

    if($checkUsername !== null) {
      $userOccupied[] = "Account with this Username already exists!";
    }

    if($checkEmail !== null) {
      $userOccupied[] = "Account with this Email already exists!";
    }

    if(empty($userOccupied)) {
      $userCanRegister = true;

      unset($fields['password_rpt']);
      $fields['password'] = password_hash($fields['password'], PASSWORD_BCRYPT);

      addUser($fields);
      $uid = dbInstance()->lastInsertId();

      $token = substr(bin2hex(random_bytes(128)), 0, 128);
      $_SESSION['token'] = $token;
      addSession($uid, $token);
      setcookie('token', $token, time() + 3600 * 24, '/');
      
      header("Location: ".BASE_URL);
      exit();
    }
  }
}

$pageTitle = "Sign Up";
$pageContent = template('auth/v_registration', [
  'errors' => $errors,
  'fields' => $fields,
  'userCanRegister' => $userCanRegister,
  'userOccupied' => $userOccupied,
]);