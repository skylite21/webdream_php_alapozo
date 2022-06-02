<?php

session_save_path('/tmp/');
session_start();

$_SESSION['name'] = 'Peter';
echo ($_SESSION['name'] ?? 'Not available');
unset($_SESSION['name']);
$_SESSION = [];
echo "<br>";

session_destroy();
