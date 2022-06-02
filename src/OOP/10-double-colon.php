<?php

namespace DoubleColon;

class Beeing {
  const LIFE = 4;
}

class Animal extends Beeing {
  const LIFE = 3;

  public function sleep() : void {
    echo $this::LIFE;
    echo self::LIFE;
    echo parent::LIFE;
    echo static::LIFE."\n";
  }

  public static function eat() : void {
    echo self::LIFE;
    echo parent::LIFE;
    echo static::LIFE."\n";
  }
}

class Dog extends Animal {
  const LIFE =2;
}

$a = new Animal();
$a->sleep();

Animal::eat();
Dog::eat();

$dog = new Dog();
$dog->sleep();

