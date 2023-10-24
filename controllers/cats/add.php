<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $error = validateCatFields($name);
  
  if($error == '') {
    addCat($name);
    header("Location: ".BASE_URL);
    exit();
  }

} else {
  $name = '';
  $error = '';
}

$pageTitle = 'Add Category';

if($user && $user['privilege'] == 1) {
  $left = template('cats/v_cats_left', [
    'cats' => $cats,
  ]);
  
  $content = template('cats/v_add', [
    'name' => $name,
    'error' => $error,
  ]);
  
  $pageContent = template('base/v_con2col', [
    'left' => $left,
    'content' => $content,
  ]);
} else {
  $pageContent = template('auth/v_unauth');
}
