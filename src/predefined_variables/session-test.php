<?php

session_save_path('/tmp/');
session_start();

$_SESSION['name'] = 'Peter';
echo ($_SESSION['name'] ?? 'Not available');


// session teljes elpusztítása
// unset($_SESSION['name']);

// kiürítjük a session változót
$_SESSION = [];

// a session cookie-t töröljük:
$sess_params = session_get_cookie_params();
setcookie(
  session_name(),
  '',
  (time() - 3600),
  $sess_params['path'],
  $sess_params['domain'],
  $sess_params['secure'],
  $sess_params['httponly']
);

echo "<br>";

// session teljes elpusztítása
session_destroy();
