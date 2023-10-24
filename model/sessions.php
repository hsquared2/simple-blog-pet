<?php

function addSession(int $id_user, string $token) : bool {
  $params = ['uid' => $id_user, 'token' => $token];
  $sql = "INSERT INTO sessions(id_user, token) VALUES (:uid, :token)";
  dbQuery($sql, $params);
  return true;
}

function getSession(string $token) : ?array {
  $sql = "SELECT * FROM sessions WHERE token = :token";
  $query = dbQuery($sql, ['token' => $token]);
  $session = $query->fetch();
  return $session === false ? null : $session;
}

function getSessionByUserId(int $uid) : ?array {
  $sql = "SELECT * FROM sessions WHERE id_user = :uid";
  $query = dbQuery($sql, ['uid' => $uid]);
  $session = $query->fetch();
  return $session === false ? null : $session;
}

function deleteSession(string $token) : bool {
  $sql = "DELETE FROM sessions WHERE token = :token";
  dbQuery($sql, ['token' => $token]);
  return true;
}