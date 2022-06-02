<?php


// composer dump-autoload;
require __DIR__ .'/../vendor/autoload.php';

use App\User;

$peter = new User('Peter', 34);
$peter->greet();

