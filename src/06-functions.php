<?php

// global variable
$name = 'Fred';

// pass by value          👇
function say_hello(string $n) : string {
  // local variable:
  $name = "Hello $n!\n";
  return $name;
}

echo say_hello($name);

echo "$name\n";
// pass by reference                👇
function convert_to_say_hello(string &$n) : void {
  $n = "Hello $n!\n";
}

convert_to_say_hello($name);

echo $name;

// általában érdemes törekedni arra hogy ne módosítsunk a külső scope változóin
// hanem új értékeket adjunk visssza

function sum_two(int|float $a, int|float $b) : int|float {
  return $a + $b;
}

// argument unpacking
function sum(int|float ...$nums): int|float {
  // $nums: tömb a functionön belül
  return array_sum($nums);
}

echo sum(2, 4, 5)."\n";
echo sum(2, 4, 5, 4, 32, 5, 3, 5);


function hello() : void {
  echo "Hello \n";
}

hello();


function validate_password (
  string $password,
  callable $custom_validator = null
) : bool {
  if(strlen($password) <= 8) {
    return false;
  } 
  if ($custom_validator !== null) {
    // call_user_func: ugyanaz mint a variable function
    // return call_user_func($custom_validator, $password);
    return $custom_validator($password);
  }
  return true;
}

function contains_at_sign(string $password) : bool {
  if(preg_match('/@/', $password)) {
    return true;
  }
  return false;
}


echo var_dump(validate_password('234123232', "contains_at_sign"));
echo var_dump(validate_password('234123@232', "contains_at_sign"));


// fvg betölthető változóba is
$contains_plus_sign = function (string $password) : bool {
  if(preg_match('/\+/', $password)) {
    return true;
  }
  return false;
};

// callback : egy olyan fvg amit egy másik fgv-nek adunk át paraméterként
echo var_dump(validate_password('234123+232', $contains_plus_sign));

$contains_plus_sign("sdf+");


$greeting = 'Hello';
$name     = 'Fred';

// function greet_user(string $name) : void {
//   global $greeting;
//   echo "$greeting $name!";
// }

$greet_user = function (string $name) use ($greeting) : void {
  echo "$greeting $name!";
};


$greet_user($name);


echo var_dump(validate_password(
  '234123+232',
  // anonym function
  function (string $password) : bool {
    if(preg_match('/\+/', $password)) {
      return true;
    }
    return false;
  }));

