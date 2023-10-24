<?php


$id = (int)URL_PARAMS['id'];

$article = getArticleById($id);
$hasArticle = $article !== null;

if($hasArticle) {
  $cat = getCatById($article['id_cat']);

  if($user) {

    if($user['privilege'] == 1 || $user['id_user'] == $article['id_user']) {
      $left = template('articles/v_article_left', [
        'article' => $article,
        'userId' => $user['id_user'],
      ]);
    
      $content = template('articles/v_article', [
        'article' => $article,
        'catName' => $cat['name'],
      ]);
    
      $pageTitle = $article['content'];
      $pageContent = template('base/v_con2col', [
        'left' => $left,
        'content' => $content,
      ]);
    } else {
      $pageContent = template('articles/v_article', [
        'article' => $article,
        'catName' => $cat['name'],
      ]);
    }

  } else {
    $pageContent = template('articles/v_article', [
      'article' => $article,
      'catName' => $cat['name'],
    ]);
  }

} else {
  $pageTitle = "Error 404";
  $pageContent = template('errors/v_404');
  header("HTTP/1.1 404 not found");
}


