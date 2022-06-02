<?php

namespace PrimitiveWrapping;

class Price {
  protected int|float $price;

  final public function __construct(int|float $price) {
    $this->price = $price;
    
  }

  public function gross_price() : int|float {
    return ($this->price * 1.27);
  }

  public function get_tax() : int|float {
    return ($this->gross_price() - $this->price);
  }

  // named constructor
  public static function from_gross_price(int $price) : Price {
    return new static($price / 1.27);
    // return new self($price / 1.27);
    // $this->price = $price / 1.27;
  }
}

class Car {
  public Price $price;
  public function __construct(Price $price) {
    $this->price = $price; 
  }

  public function get_price() :Price {
    return $this->price;
  }

}

$my_car = new Car(new Price(100));

$my_ohter_car = new Car(Price::from_gross_price(127));

echo $my_ohter_car->get_price()->get_tax();



