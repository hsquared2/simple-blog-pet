<?php

if(!$user) {
  header("Location: ".BASE_URL."auth/login");
  exit();
}


$id = (int)URL_PARAMS['id'];

$validCat = getCatById($id) !== null;

if($validCat && $user['privilege'] == 1) {
  deleteCat($id);
  header("Location: ".BASE_URL."cats/all");
  exit();
} else {
  $pageTitle = "Error 404";
  $pageContent = template('errors/v_404');
  header("HTTP/1.1 404 not found");
}
