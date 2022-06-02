<?php

class Age {
  private int $age;

  public function __construct(int $age) {
    if ($age < 0 || $age > 120) {
      throw new \InvalidArgumentException('That makes no sense');
    }
    $this->age = $age;
  }

  public function increment() : Age {
    return new self($this->age + 1);
  }

  public function get() : int {
    return $this->age;
  }

}

function register(string $name, Age $age) : void {

}

$age = new Age(35);
$age = $age->increment();
var_dump($age->get());

register('John', $age);

