<?php

namespace uniontypes;

// php8+
function add(int|float $num, int|float $num2) :int|float {
  return ($num + $num2);
}

// ez mukodott 8 alatt is
class User {
  public function makeFriendsWith(?User $user):void {
    var_dump('yay friends');
  }
}

$joe = new User();

$joe->makeFriendsWith(null);

// pseudo types: mixed, callable, iterable
