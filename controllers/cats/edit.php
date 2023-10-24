<?php

$id = (int)URL_PARAMS['id'];
$cat = getCatById($id);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $error = validateCatFields($name);

  if($error == '') {
    $fields['name'] = $name;
    $fields['id'] = $cat['id_cat'];

    updateCat($fields);
    header("Location: ".BASE_URL."cats/all");
    exit();
  }

} else {
  $error = '';
  $fields = ['name' => ''];
}

if($user && $user['privilege'] == 1) {
  if($cat) {
    $left = template('cats/v_cats_left', [
      'cats' => $cats,
    ]);
  
    $content = template('cats/v_edit', [
      'name' => $cat['name'],
      'error' => $error,
    ]);
  
    $pageTitle = 'Edit Category';
    $pageContent = template('base/v_con2col', [
      'left' => $left,
      'content' => $content,
    ]);
  } else {
    $pageTitle = 'Error 404';
    $pageContent = template('errors/v_404');
  }
} else {
  $pageContent = template('auth/v_unauth');
}

