<?php

$a = [2,3,4,6,4];

// egy elemet keresünk

function is_six(int $element) : bool {
  return $element === 6;
}

$i = 0 ;

$length_of_a = count($a);

while($i < $length_of_a && !is_six($a[$i])) {
  $i += 1;
}

if ($i < count($a)) {
  echo "van benne keresett elem\n";
  echo strval($i+1) . "-edik helyen \n";
} else {
  echo "nincs benne a keresett elem\n";
}

//
$res = array_search(6, $a);
echo $res === false ? 'nincs benne' : ($res+1).'-edik helyen';

