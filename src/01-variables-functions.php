<?php

// echo 'szia';

// value assignment
// variable <- value

// phpstorm: ctr+/ : comment
// phpstorm: ctr+shift+/ : block comment

// Scalar types:
$name  = 'Jeff';  // string
$age   = 42;       // integer
$score = 54.4;   // float
$alive = true;   // boolean

// string concatenation
echo "Hello ".$name."\n";
echo "Hello {$name} \n";

// valtozok es \n nem mukodik '' jelek között

echo 'Hello $name \n';
echo "\n";

// ctr+shift+alt+L
/**
 * my greeting function this greets the user
 *
 * @param string $name
 */
function my_greeting($name) {
    echo "Hello {$name} \n"; 
}

my_greeting("John");

/**
 * This greets the user
 *
 * @param string $name the name of the user
 * @param string $title the title of the user
 *
 * @return string $greeting the complete greeting string
 */
function greeting(string $name, string $title='Mr.'): string {
  return "Hello $title $name !\n";
}

// php8 >
echo greeting(title: "John", name: "Mrs.");
