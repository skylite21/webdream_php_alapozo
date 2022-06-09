<?php


$id = 'inv_2jdflkgj';

// ez volt régen
$result = strpos($id, 'inv_') === 0;

var_dump($result);

//php8+
$result = str_starts_with($id, 'inv_');

var_dump($result);

$id = '234we32rffs_inv';

$result = strpos(strrev($id), strrev('_inv')) === 0;

var_dump($result);

$result = !!preg_match('/_inv$/', $id);
var_dump($result);

//php8+
$result = str_ends_with($id, '_inv');
var_dump($result);

// van e benne query string
$url = 'https://example.com?foo=bar';

$result = !!parse_url($url)['query'];
var_dump($result);

$result = strpos($url, '?') !== false;
var_dump($result);

//php8+
$result = str_contains($url, '?');
var_dump($result);
