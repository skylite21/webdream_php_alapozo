<?php

// létrehozhatunk fgv-t egy feltétel alapján is:


$test = true;
// $test = false;
if($test) {
  function my_func() {
    echo "my first function\n";
  }
}

my_func();

function my_function() {
  echo "my second function\n";

  if(!function_exists('my_inner_function')) {
    function my_inner_function() {
      echo "my_inner_function\n";
    }
  }
}

my_function();
my_inner_function();
