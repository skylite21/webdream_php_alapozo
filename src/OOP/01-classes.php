<?php

// DRY : do not repeat yourself

// class név tipikusan főnév
// Comment, Cart, Inovoce, Product

// adat, és működés
class Project {
  // properties
  public string $title;
  public string $description;

  public function __construct(string $title, string $description) {
    // $this kulcsszó: a később létrejövő objektum példányra egy referencia
    $this->title       = $title;
    $this->description = $description;

  }

  // methods
  public function close() : void {

  }
  // snake-case
  public function add_user() : void {

  }
  // addUser: camelCase
}

// instantiation: példányosítás
$my_project = new Project('My Project', 'My project description');

// $my_project egy konkrét project
echo $my_project->title."\n";

// $my_project a Project példánya
echo $my_project->title;
echo $my_project->description;
echo "\n";

class Product {
  public int|float $price;
  private int $stock = 0;

  public function __construct(int|float $price) {
    $this->price = $price;
  }
  public function purchse(int $amount) : void {
    $this->stock -= $amount;
  }

  public function get_stock() : int {
    return $this->stock;
  }
  public function add_stock(int $amount) : void {
    $this->stock += $amount;
  }
}

$keyboard = new Product(123);

echo $keyboard->get_stock(). "\n";
$keyboard->add_stock(23);
echo $keyboard->get_stock(). "\n";
$keyboard->purchse(2);
echo $keyboard->get_stock(). "\n";
