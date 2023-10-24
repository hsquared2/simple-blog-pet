<?php

if(!$user) {
  header("Location: ".BASE_URL."auth/login");
  exit();
}


$fields = ['title' => '', 'content' => '', 'cat' => ''];
$validateErrors = [];

$id = URL_PARAMS['id'];
$article = getArticleById($id);
$hasArticle = $article !== null;

if($user['id_user'] !== $article['id_user']) {
  header("Location: " . BASE_URL);
  exit();
}

if($_SERVER['REQUEST_METHOD'] === "POST") {
  $fields = extractFields($_POST, ['title', 'content', 'cat']);
  $fields['id'] = $article['id_article'];
  $validateErrors = validateFields($fields);

  if(empty($validateErrors)) {
    updateArticle($fields);
    header("Location: ".BASE_URL."article/".$article['id_article']);
    exit();
  }
} 

if(!$hasArticle) {
  $pageContent = template('errors/v_404');
} else {
  $catId = $article['id_cat'];
  $fields = extractFields($article, ['title', 'content', 'id_cat']);

  $pageTitle = 'Edit Article';
  $pageContent = template('articles/v_edit', [
    'fields' => $fields,
    'cats' => $cats,
    'catId' => $catId,
    'validateErrors' => $validateErrors,
  ]);
}

