<?php

$id = (int)URL_PARAMS['id'];

$cat = getCatById($id); 
$validCat = $cat !== null;

if($validCat) {
  $articles = getArticlesByCat($id);
  $catName = $cat['name'];

  $pageTitle = $catName;
  $pageContent = template('cats/v_cat', [
    'name' => $catName,
    'articles' => $articles,
    'id' => $id,
    'user' => $user,
  ]);
} else {
  header("HTTP/1.1 404 Not Found");
  $pageTitle = 'Error 404';
  $pageContent = template('errors/v_404');
}


