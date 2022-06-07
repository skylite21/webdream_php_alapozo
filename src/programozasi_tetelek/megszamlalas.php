<?php

$t = [4,6,7,1,2];

// megszámlálás
$count = 0;
foreach($t as $num) {
  if($num > 5) {
    $count++;
  }
}

echo '5-nél nagyobb: '. $count . "\n";

function bigger_than_five(int $element): bool {
  return $element > 5;
}

$count = 0;
foreach($t as $num) {
  if (bigger_than_five($num)) {
    $count++;
  }
}

echo '5-nél nagyobb: '. $count . "\n";

echo '5-nél nagyobb: '. count(array_filter($t, 'bigger_than_five'));

