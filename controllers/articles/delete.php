<?php

if(!$user) {
  header("Location: ".BASE_URL."auth/login");
  exit();
}

$id = (int)URL_PARAMS['id'];
$article = getArticleById($id);
$hasArticle = $article !== null;

if($hasArticle && ($user['id_user'] == $article['id_user'] || $user['privilege'] == 1)) {
  deleteArticle($id);
  header("Location: ".BASE_URL);
  exit();
} else {
  $pageContent = template('errors/v_404');
  header("HTTP/1.1 404 not found");
}
