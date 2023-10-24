<?php

function getCatById(int $catId) : ?array {
  $sql = "SELECT * FROM categories WHERE id_cat = :catId";
  $query = dbQuery($sql, ['catId' => $catId]);
  $cat = $query->fetch();
  return is_array($cat) ? $cat : null;
}

function getCategories() : array {
  $sql = "SELECT * FROM categories";
  $query = dbQuery($sql);
  return $query->fetchAll();
}

function getArticlesByCat(int $catId) : array {
  $sql = "SELECT * FROM articles WHERE id_cat = :catId ORDER BY dt_add DESC";
  $query = dbQuery($sql, ['catId' => $catId]);
  return $query->fetchAll();
}

function addCat(string $name) : bool {
  $sql = "INSERT INTO categories (name) VALUES (:name)";
  dbQuery($sql, ['name' => $name]);
  return true;
}

function updateCat(array $fields) : bool {
  $sql = "UPDATE categories SET name=:name WHERE id_cat = :id";
  dbQuery($sql, $fields);
  return true;
}

function deleteCat(int $id) : bool {
  $sql = "DELETE FROM categories WHERE id_cat = :id";
  dbQuery($sql, ['id' => $id]);
  return true;
}

function checkCatExists(string $name) : ?array {
  $sql = "SELECT count(*) as cnt FROM categories WHERE name = :name";
  $query = dbQuery($sql, ['name' => $name]);
  $cat = $query->fetch();
  return $cat === false ? null : $cat;
}

function getArticlesPerCat() : array{
  $sql = "SELECT id_cat, categories.name, count(id_article) as cnt FROM articles RIGHT JOIN categories USING(id_cat) GROUP BY id_cat";
  $query = dbQuery($sql);
  return $query->fetchAll();
}
