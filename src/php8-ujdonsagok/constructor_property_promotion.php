<?php

// class User {
//   protected string $name;
//   public function __construct(string $name) {
//     $this->name = $name;
//     
//   }
// }

class User {
  public function __construct(public string $name) {}
}


$my_user = new User('Steve');
echo $my_user->name;
