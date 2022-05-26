<?php

// DRY : do not repeat yourself

// class név tipikusan főnév
// Comment, Cart, Inovoce, Product

// adat, és működés
class Project {
  // properties
  public $title;
  public $description;

  // methods
  public function close() {

  }

  public function add_user() {

  }
}

// instantiation: példányosítás
$my_project = new Project();

// $my_project egy konkrét project
$my_project->title = "My Project";

// $my_project a Project példánya
echo $my_project->title;
echo $my_project->description;
echo "\n";

class Product {
  public $price;
  private $stock = 0;
  public function purchse($amount) {
    $this->stock -= $amount;
  }

  public function get_stock() {
    return $this->stock;
  }
  public function add_stock($amount) {
    $this->stock += $amount;
  }
}

$keyboard = new Product();

echo $keyboard->get_stock(). "\n";
$keyboard->add_stock(23);
echo $keyboard->get_stock(). "\n";
$keyboard->purchse(2);
echo $keyboard->get_stock(). "\n";
