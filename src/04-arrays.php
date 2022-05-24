<?php

$names = ['Peter', 'John', 'Peter', 'George'];

$names[] = 'Tom';
// array_push($names, 'Tom');

// az indexeket nem reseteli!
unset($names[1]);

var_dump($names);
// a spice reseteli az indexeket:
array_splice($names, 2, 1);

$last_item = array_pop($names);

echo $last_item;

var_dump($names);

foreach($names as $name) {
  echo "<li>$name</li>\n";
}

// $player = ['John', 42, true, 34.4];


$player = [
  // key => value
  'name'  => 'John',
  'age'   => 42,
  'alive' => true,
  'score' => 34.4
];

echo $player['name'];

$player['ammo'] = 100;
unset($player['ammo']);

var_dump($player);

foreach($player as $key => $value) {
  echo "$key: $value \n";
}

die(var_dump($player));

// unreachable code:
echo 'hello!!!';
