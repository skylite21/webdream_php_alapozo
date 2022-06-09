<?php

namespace named;

function greeting(string $name, string $title='Mr.') : string {
  return "Hello $title $name !\n";
}

echo greeting(name: 'Kitti', title: 'Mrs');
