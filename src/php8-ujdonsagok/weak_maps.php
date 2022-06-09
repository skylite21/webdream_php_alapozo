<?php

// weak map: olyan key-value store ahol a key-ek objectek
// ilyet nem lehet phpban:
// [ $obj => 'foobar' ]


$obj = new stdClass();

// régen ez volt:
// $store = new SplObjectStorage();

// php8+
$store = new WeakMap();

$store[$obj] = 'foobar';

var_dump($store);

unset($obj);

var_dump($store);
