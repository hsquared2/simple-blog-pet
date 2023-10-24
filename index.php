<?php


session_start();

include_once('init.php');

$user = [];
$token = $_SESSION['token'] ?? $_COOKIE['token'] ?? null;

if($token !== null) {
  $session = getSession($token);

  if($session !== null) {
    $user = getUserById($session['id_user']);

    if($user === null) {
      unset($_SESSION['token']);
      setcookie('token', '', time() - 1, BASE_URL);
    }
  }
}


$cats = getCategories();

$pageCanonical = HOST.BASE_URL;
$uri = $_SERVER['REQUEST_URI'];
$badUri = BASE_URL.'index.php';

if(strpos($uri, $badUri) === 0) {
  $cname = 'e404';
} else {
  $routes = include('routes.php');
  $url = $_GET['querysystemurl'] ?? '';
  $routesRes = parseUrl($url, $routes);
  $cname = $routesRes['controller'];
  define('URL_PARAMS', $routesRes['params']);

  $urlLen = strlen($url);

  if($urlLen > 0 && $url[$urlLen - 1] == '/') {
    $url = substr($url, 0, $urlLen - 1);
  }

  $pageCanonical .= $url;
}

$path = "controllers/$cname.php";
$pageTitle = $pageContent = '';

if(!file_exists($path)) {
  $cname = 'e404';
  $path = $path = "controllers/$cname.php";
}

include_once($path);

$html = template('base/v_main', [
  'title' => $pageTitle,
  'cats' => $cats,
  'content' => $pageContent,
  'canonical' => $pageCanonical,
  'user' => $user,
]);

echo $html;
