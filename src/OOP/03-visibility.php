<?php

class MyClass {
  public string $public       = 'Public';
  protected string $protected = 'Protected';
  private string $private     = 'Private';

  public function printHello() : void {
    echo $this->public;
    echo $this->protected;
    echo $this->private;
  }
}

$obj = new MyClass();

echo $obj->public; // működik 
// echo $obj->protected; // fatal error
// echo $obj->private;   // fatal error

$obj->printHello(); // public, protected. private-ot is kiirja


class MySubClass extends MyClass {
  public function printTest() : void {
    echo $this->public;
    echo $this->protected;
    // echo $this->private; // fatal error
  }
}

(new MySubClass())->printTest();
