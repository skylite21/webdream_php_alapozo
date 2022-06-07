<?php

$t = [4,5,3,1];

echo "összeg: ".array_sum($t)."\n";

// összegzés tétele:
$osszeg = 0;
foreach($t as $num) {
  $osszeg += $num;
}

echo "összeg: $osszeg \n";

$arr = [
  ['price' => 2], 
  ['price' => 20], 
  ['price' => 50], 
];

$sum = 0;
foreach($arr as $item) {
  $sum += $item['price'];
}

echo "összeg: $sum \n";

echo "összeg: ".array_reduce($t, function($sum, $num) {
  return $sum+$num;
}, 0)."\n";


$label = 'price';
echo "összeg: ".array_reduce($arr, function($sum, $item) use($label) : int {
  return $sum+$item[$label];
}, 0);
