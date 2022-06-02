<?php

namespace App;

class User {

  public int $age;
  public string $name;

  public function __construct(string $name, int $age) {
    $this->name = $name;
    $this->age  = $age;
  }

  public function greet() : void {
    echo "Hello $this->name";
  }

}

