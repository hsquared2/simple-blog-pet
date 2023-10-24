<?php


function getArticles() : array{
  $sql = "SELECT articles.*, `categories`.`name` AS `category` FROM articles JOIN categories USING(id_cat) ORDER BY dt_add DESC";
  $query = dbQuery($sql);
  return $query->fetchAll();
}

function addArticle(array $fields) : bool {
  $sql = "INSERT INTO articles (title, content, id_user, id_cat) VALUES (:title, :content, :id_user, :cat)";
  dbQuery($sql, $fields);
  return true;
}

function updateArticle(array $fields) : bool {
  $sql = "UPDATE articles SET title=:title, content=:content, id_cat=:cat WHERE id_article=:id";
  dbQuery($sql, $fields);
  return true;
}

function getArticleById(int $id) : ?array {
  $sql = "SELECT * FROM articles WHERE id_article = :id";
  $query = dbQuery($sql, ['id' => $id]);
  $article = $query->fetch();
  return is_array($article) ? $article : null;
}

function getArticlesByUserId(int $userId) : array {
  $sql = "SELECT * FROM articles WHERE id_user = :id_user";
  $query = dbQuery($sql, ['id_user' => $userId]);
  return $query->fetchAll();
}

function deleteArticle(int $id) {
  $sql = "DELETE FROM articles WHERE id_article = :id";
  dbQuery($sql, ['id' => $id]);
  return true;
}
