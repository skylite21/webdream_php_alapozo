<?php

require_once __DIR__.'/my/spaceships.php';
require_once __DIR__.'/my/vehicles.php';

use My\Vehicles\Car;

$mycar = new Car();

echo $mycar->fuel;

use My\Spaceships\MillenniumFalcon as MF;

$myMF = new MF();

use My\Spaceships\{ StarDestroyer, TieFighter };

$myship = new StarDestroyer();
echo $myship->power;

// echo __DIR__;
// echo __FILE__;
