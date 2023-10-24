<?php

$articles = getArticles();

$view = $_GET['view'] ?? ''; 
$isTable = $view === 'table';
$template = $isTable ? 'v_index_table' : 'v_index';

$pageTitle = 'Main Page';
$pageContent = template($template, [
  'articles' => $articles,
]);



