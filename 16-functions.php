<?php

// function happy_birthday($first_name, $age)
// {
//   echo "Happy Birthday dear {$first_name}!<br>";
//   echo "aaaa<br>";
//   echo "kys {$age}<br>";
//   echo "kurwo<br><br>";

//   return "chuj";
// }

// happy_birthday("Cwelu", 32);
// happy_birthday("Pedale", 21);
// happy_birthday("Cioto", 23);

// function is_even($number)
// {
//   $result = $number % 2;
//   return $result;
// }

// echo is_even(10);

function hypotenuse(float $a, float $b)
{
  $c = sqrt($a ** 2 + $b ** 2);
  return $c;
}

echo hypotenuse(4, 5);
