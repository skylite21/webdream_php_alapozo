<?php

$a = [2,35,4];

echo "legnagyobb: ".max($a)." helye:"
.strval(array_search(max($a), $a)+1). "\n";

$max     = $a[0];
$max_pos = 0;

$length_of_a = count($a);
for ($i=0; $i < $length_of_a; $i++) {
  if($a[$i] > $max) {
    $max     = $a[$i];
    $max_pos = $i;
  }
}

echo "legnagyobb: $max helye:".strval($max_pos+1)."\n";


