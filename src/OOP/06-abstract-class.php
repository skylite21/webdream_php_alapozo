<?php

// Abstract class nem példányosítható class
abstract class AbstractAnimal {
  // abstract metódus: nincs function body, a gyerek osztálynak muszáj
  // implementálnia ezt a metódust
  abstract protected function eat(): void;
  protected function reproduce() : void {

  }
}

// $my_animal = new AbstractAnimal(); // error

class Dog extends AbstractAnimal {
  protected function eat() : void {

  }
  public function bark() : void {

  }
}

$my_dog = new Dog();
