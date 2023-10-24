<?php

if($_SERVER['REQUEST_METHOD'] === "POST") {
  $fields = extractFields($_POST, ['title', 'content', 'cat']);
  $validateErrors = validateFields($fields);

  if(empty($validateErrors)) {
    $fields['id_user'] = $user['id_user'];
    addArticle($fields);
    
    $lastId = dbInstance()->lastInsertId(); 
    header("Location: ".BASE_URL."articles/article/$lastId");
    exit();
  }
} else {
  $fields = ['title' => '', 'content' => '', 'cat' => ''];
  $validateErrors = [];
}

$pageTitle = 'Add Article';

if($user) {
  $pageContent = template('articles/v_add', [
    'fields' => $fields,
    'validateErrors' => $validateErrors,
    'cats' => $cats,
  ]);
} else {
  $pageTitle = "Unauthorized access";
  $pageContent = template('auth/v_unauth');
}

