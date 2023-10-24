<?php

function getUser(string $username) : ?array {
  $sql = "SELECT id_user, password FROM users WHERE username = :username";
  $query = dbQuery($sql, ['username' => $username]);
  $user = $query->fetch();
  return is_array($user) ? $user : null;
}

function getUserById(int $userId) : ?array {
  $sql = "SELECT id_user, username, email, name, dt_registration, privilege FROM users WHERE id_user = :id";
  $query = dbQuery($sql, ['id' => $userId]);
  $user = $query->fetch();
  return is_array($user) ? $user : null;
}

function getUserByUsername(string $username) : ?array {
  $sql = "SELECT id_user, username, name, email FROM users WHERE username = :username";
  $query = dbQuery($sql, ['username' => $username]);
  $user = $query->fetch();
  return is_array($user) ? $user : null;
}

function getUserByEmail(string $email) : ?array {
  $sql = "SELECT id_user, username, name, email FROM users WHERE email = :email";
  $query = dbQuery($sql, ['email' => $email]);
  $user = $query->fetch();
  return is_array($user) ? $user : null;
}

function addUser(array $fields) : bool {
  $sql = "INSERT INTO users(name, username, email, password) VALUES (:name, :username, :email, :password)";
  dbQuery($sql, $fields);
  return true;
}