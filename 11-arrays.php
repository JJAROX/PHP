<?php

$foods = array("apple", "orange", "banana", "coconut");

// $foods[0] = "pineapple";

// array_push($foods, "pineapple", "kiwi");

// array_pop($foods); //usuwa ostatni element z tablicy

// array_shift($foods); //usuwa pierwszy element z tablicy

// $reversed_foods = array_reverse($foods);

echo "Zliczenie elementów tablicy: " . count($foods) . "<br>";

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";
// echo $foods[3] . "<br>";

foreach ($foods as $food) {
  echo $food . "<br>";
}
