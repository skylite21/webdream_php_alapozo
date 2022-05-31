<?php

//  bekapcsoljuk a strict mode-ot: ilyenkor a tipusok ellenőzve vannak és
//  hibát dob a php ha nem jók a típusok
declare(strict_types = 1);

function get_int(int $int) :void {
  var_dump($int);
}

$int = 23;
get_int($int);

// erre hibát dob a php ha a strcit mode be van kapcsolva, különben nem
get_int('23');
