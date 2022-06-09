<?php

$a = [ 6, 3, 5, 1 ];

// sort($a);

$length_of_a = count($a);

// var_dump($a);

function flip(mixed &$a, mixed &$b) : void {
  $temp = $a;
  $a    = $b;
  $b    = $temp;
}

for($i = $length_of_a; $i > 1; $i-- ) {
  for($j = 0; $j < ($i - 1); $j++ ) {
    if( $a[$j] > $a[($j + 1)] ) {
      flip($a[$j], $a[$j+1]);
    }
  }
}

echo 'sorted array is: ' . implode(', ', $a) . "\n";

$x = 5;
$y = 9;

[$x, $y] = [$y, $x];

echo $x;
echo $y;


$tomb = [5,6];

// $v = $tomb[0];
// $w = $tomb[1];
// array destructuring;
[$v, $w] = $tomb;
