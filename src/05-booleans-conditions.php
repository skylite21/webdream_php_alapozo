<?php

$alive = true;

// $alive = false;

if($alive === true) {
  $alive = false;
} else {
  $alive = true;
}


if($alive) {
  $alive = false;
} 

// boolean negálás
$alive = !$alive;

var_dump($alive);


// empty string: falsy
$name = '';

if($name) {
  echo "name";
}

// az előzővel egyenértékő, csak explicit:
// explicit is better than implicit! (zen of python)
if($name !== '') {
  echo "name";
}

echo "A string boolen-ra akalítva: \n";
var_dump((bool) 'sdfsdf');
var_dump((bool) '');

echo "Array boolen-ra akalítva: \n";
var_dump((bool) []); // falsy
var_dump((bool) ['asd']); // truthy

$names = ['sdfs'];

if(is_array($names) && $names !== []) {
  echo "vannak nevek\n";
}

$age = 32;

// and szó ugyanaz mint a &&
if (!$alive and $age >= 10) {
  echo "I am old and dead\n";
}

if ($alive or $age >= 20) {
  echo "I may be young or alive\n";
}

// or szó ugyanaz mint a ||
if ($alive || $age >= 20) {
  echo "I may be young or alive\n";
}
