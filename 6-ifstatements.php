<?php

$age = 101;

$adult = true;

$hours = 50;
$rate = 15;
$weekly_pay = null;
if ($hours == 0) {
  $weekly_pay = 0;
} else if ($hours <= 40) {
  $weekly_pay = $hours * $rate;
} else {
  $weekly_pay = ($rate * 40) + ($hours - 40) * ($rate * 1.5);
}

echo "You made \${$weekly_pay} this week<br>";

if ($age >= 18 && $age <= 100) {
  echo "You may enter this site<br>";
} else if ($age <= 0) {
  echo "That wasn't a valid age<br>";
} else if ($age >= 100) {
  echo "You are too old to enter this site<br>";
} else {
  echo "You must be 18+ to enter <br>";
}

if ($adult) {
  echo "You may enter this site";
} else {
  echo "You must be an adult to enter";
}
