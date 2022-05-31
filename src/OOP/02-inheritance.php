<?php

class CoffeeMaker {
  public function brew() : void {
    echo "Brewing the coffee \n";
  }
}

// $my_coffee_maker = new CoffeeMaker();
// $my_coffee_maker->brew();

// példányosítás változó deklarálás nélkül
(new CoffeeMaker())->brew();

// inheritance: a gyerek osztály örökli a szülő osztály
// összes nem private propertyjét és metódusát
class SpecialityCoffeeMaker extends CoffeeMaker {
  public function brewLatte() : void {
    echo "Brewing a latte\n";
  }
}
