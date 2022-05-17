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
function my_greeting($name)
{ 
    echo "Hello {$name} \n"; 
}
