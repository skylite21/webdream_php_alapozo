<?php


// separation of concerns
$name = 'John';
date_default_timezone_set('Europe/Budapest');

$pattern = 'yyyy MMMM d. HH:mm:ss';
// dateType, timeType are ignored because we define a pattern
$date = datefmt_format(new IntlDateFormatter('hu_HU', 0, 0,
  pattern: $pattern), time() );

$term = null;
if (isset($_GET['term'])) {
  $term = htmlspecialchars($_GET['term']);
}
