<?php


// separation of concerns
$name = 'John';
date_default_timezone_set('Europe/Budapest');

$pattern = 'yyyy MMMM d. HH:mm:ss';
$date    = datefmt_format(new IntlDateFormatter('hu_HU',
  pattern: $pattern), time() );

$term = null;
if (isset($_GET['term'])) {
  $term = htmlspecialchars($_GET['term']);
}

require '03-templating.tpl.php';
