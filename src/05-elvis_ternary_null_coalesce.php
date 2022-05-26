<?php

// echo $asd;

function generate_user_id() {
  return rand();
}

$user_id = null;

if(!$user_id) {
  $user_id = generate_user_id();
}

echo $user_id;

echo "\n";

// elvis operator:
// ha van user id akkor irasd ki, különben generálj egyet
echo $user_id ?: generate_user_id();

echo "\n";
// ternary operator:
// a kérdőjel előtti rész a vizsgálat, a kérdőjel utáni rész akkor fut le ha a
// feltétel igaz, a kettőspont utáni rész akkor fut le ha a feltétel hamis
$user_status = $user_id ? "belépve" : "kilépve";

if($user_id) {
  $user_status = 'belépve';
} else {
  $user_status = 'kilépve';
}

echo $user_status;

echo "\n";


$y = 4;
if(isset($x)) {
  echo $x;
} else {
  echo $y;
}

echo isset($x) ? $x : $y;

// null coalescing operator:
echo $x ?? $y;


// a ?? csak akkor adja a bal oldalt ha az nem létezik
$x = false; 
var_dump($x ?? $y);

// ha az $x korábban létezett akkor ne változzon az értéke, de ha nem létezik
// akkor legyen az értéke $y 
// php 7.4+
$x ??= $y;


