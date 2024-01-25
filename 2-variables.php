<?php

$name = "Martin";
$food = "pizza";
$email = "fake@gmail.com";

$age = 21;
$users = 2;
$quantity = 4;

$gpa = 2.5;
$price = 5.99;
$tax_rate = 5.1;

$employed = true;
$online = false;
$for_sale = true;

$total = null;


echo "Hello {$name} <br>";
echo "You like {$food}<br>";
echo "Your email is {$email}<br>";

echo "You are {$age} years old!<br>";
echo "There are {$users} users is online<br>";
echo "You would like to buy {$quantity} items<br>";
echo "Your gpa is {$gpa}<br>";
echo "Your pizza is \${$price}<br>";
echo "The sales tax rate is: {$tax_rate}%<br>";
echo "Online statis: {$online}<br>";
echo "Empolyed statis: {$employed}<br>";

echo "You have ordered {$quantity} x {$food}s<br>";
$total = $quantity * $price;
echo "Your total is: \${$total}";
