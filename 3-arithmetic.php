<?php

$x = 10;
$y = 3;
$z = null;

$counter = 0;
$counter += 2;
echo "{$counter}<br>";
$counter++;
echo "{$counter}<br>";

$z = $x + $y;
echo "Dodwanie {$z}<br>";
$z = $x - $y;
echo " Odejmowanie {$z}<br>";
$z = $x * $y;
echo "Mnożenie {$z}<br>";
$z = $x / $y;
echo " Dzielenie {$z}<br>";
$z = $x ** $y;
echo "Potęgowaniee {$z}<br>";
$z = $x % $y;
echo "Modulo {$z}<br>";
