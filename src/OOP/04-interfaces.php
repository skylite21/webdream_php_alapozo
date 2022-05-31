<?php

interface BattleShip {
  public function attack() : void;
}

// az interface minden metódusa public kell h legyen
interface CargoShip {
  public function loadCargo() : void;
  public function organizeCargo() : void;
}

interface PassengerShip {
  public function addPassengers() : void;
}

// php-ban csak egy szülőosztálya lehet egy osztálynak
// de interfaceből többet is implementálhat
class StarDestroyer implements BattleShip, CargoShip, PassengerShip {
  public function attack() : void {

  }
  public function loadCargo() : void {

  }
  public function organizeCargo() : void {

  }
  public function addPassengers() : void {

  }
}

$vader_ship = new StarDestroyer();
