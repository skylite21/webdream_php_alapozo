<?php

// létrehozhatunk fgv-t egy feltétel alapján is:


$test = true;
// $test = false;
/**
 * @psalm-suppress RedundantCondition
 */
if($test) {
  function my_func() : void {
    echo "my first function\n";
  }
}

my_func();

function my_function() : void {
  echo "my second function\n";

  if(!function_exists('my_inner_function')) {
    function my_inner_function() : void {
      echo "my_inner_function\n";
    }
  }
}

my_function();
my_inner_function();
