<?php

class Solution {
  public static int $count = 0;
  public static function increment_count() : int {
    // $this az objektum példányt jelenti
    // self az aktuális osztály-t jelenti
    return self::$count++;
  }
}

Solution::$count = 1;

for ($i = 0; $i < 5; $i++) {
  echo 'The next value is:'.Solution::increment_count()."\n";
}

