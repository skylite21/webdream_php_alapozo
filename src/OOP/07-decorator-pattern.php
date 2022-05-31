<?php

// coding pattern: struktúrált megközelítése a programozásnak


interface Car {
  public function cost() : int;
  public function description() : string;
}

class Suv implements Car {
  public function cost() : int {
    return 30000;
  }
  public function description() : string {
    return 'Suv';
  }
}

abstract class AbstractCarFeature implements Car {
  protected Car $car;
  public function __construct(Car $car) {
    $this->car = $car;
  }

  abstract public function cost() : int;
  abstract public function description() : string;
}

class SunRoof extends AbstractCarFeature {
  public function cost() : int {
    return ($this->car->cost() + 1500);
  }
  public function description() : string {
    return $this->car->description() . ', sunroof';
  }
}


class HighEndWheels extends AbstractCarFeature {
  public function cost() : int {
    return ($this->car->cost() + 2000);
  }
  public function description() : string {
    return $this->car->description() . ', high end wheels';
  }
}


$basicCar = new Suv();

$carWithSunroof = new SunRoof($basicCar);

$carWithSunroofAndHighEndWheels = new HighEndWheels($carWithSunroof);

echo $carWithSunroofAndHighEndWheels->description();
echo "\ncosts: \n";
echo $carWithSunroofAndHighEndWheels->cost();
