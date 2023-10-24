<?php

function checkId(string $id) : bool {
  return preg_match('/^[1-9]+$/', $id);
}

function checkControllerName(string $fileName) {
  return preg_match('/^[a-z0-9_]+$/', $fileName);
}

function validateFields(array &$fields) : array {
  $errors = [];
  $textLen = mb_strlen($fields['content'], 'UTF-8');

  if(mb_strlen($fields['title'], 'UTF-8') < 2) {
    $errors[] = 'Title has to be at least 2 characteres long!';
  } 

  if($textLen < 10) {
    $errors[] = 'Content can\'t be less than 10 characters!';
  }

  $fields['title'] = htmlspecialchars($fields['title']);
  $fields['content'] = htmlspecialchars($fields['content']);

  return $errors;
}

function validateCatFields(string &$name) : string{
  $error = '';
  $cat = checkCatExists($name);
  
  $error = mb_strlen($name, 'UTF-8') < 2 ? 'Name can\'t be less than 2 characters long!' : $error; 

  if($cat !== null) {
    $error = $cat['cnt'] > 0 ? 'Category already exists' : $error;
  }
  
  $name = htmlspecialchars($name);

  return $error;
}

function validateRegistrationFields(array &$fields) : array{
  $errors = [];
  $emailRegEx = "/^\S+@\S+\.\S+$/";
  
  foreach($fields as $field) {
    $field = htmlspecialchars($field);
  }

  if(!preg_match($emailRegEx, $fields['email']) ) {
    $errors[] = 'Wrong email format, try again!';
  }

  if(mb_strlen($fields['username']) < 2) {
    $errors[] = "Username can't be less than 2 characters long!";
  }

  if(mb_strlen($fields['name']) < 2) {
    $errors[] = "Name can't be less than 2 characters long!";
  }

  if($fields['password'] !== $fields['password_rpt']) {
    $errors[] = "Password do not match, try again!";
  }

  return $errors;
}

function template(string $path, $vars = []) {
  $currentTemplatePath = "views/$path.php";
  extract($vars);
  ob_start();
  include($currentTemplatePath);
  return ob_get_clean();
}

function articleBodyPreview(string $str) : string {
  if(mb_strlen($str) > 250) {
    return mb_substr($str, 0, 250).'...';
  }
  return $str;
}


function parseUrl(string $url, array $routes) : array {
  $res = [
    'controller' => 'e404',
    'params' => [],
  ];

  $matches = [];

  foreach($routes as $route) {
    if(preg_match($route['test'], $url, $matches)) {
      $res['controller'] = $route['controller'];
      
      if(isset($route['params'])){
        foreach($route['params'] as $name => $num) {
          $res['params'][$name] = $matches[$num];
        }
      }
      
      break;
    }
  }

  return $res;
}
