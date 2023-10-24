<?php

$articlesPerCat = getArticlesPerCat();

$pageTitle = 'Categories';

if(!empty($cats)) {
  $pageContent = template('cats/v_all', [
    'articlesPerCat' => $articlesPerCat,
  ]);
} else {
  $pageContent = template('cats/v_empty');
}

