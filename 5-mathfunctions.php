<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <form action="5-mathfunctions.php" method="post">
    <label>x:</label>
    <input type="text" name="x">
    <br>
    <label>y:</label>
    <input type="text" name="y">
    <br>
    <label>z:</label>
    <input type="text" name="z">
    <br>
    <input type="submit" value="total">
  </form> -->

  <form action="5-mathfunctions.php" method="post">
    <label>radius:</label>
    <input type="text" name="radius">
    <input type="submit" value="calculate">
  </form>
</body>

</html>
<?php

$radius = $_POST["radius"];

$circumference = null;
$area = null;
$volume = null;
$circumference = 2 * pi() * $radius;

$circumference = round($circumference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = (4 / 3) * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "Circumference = {$circumference}cm<br>";
echo "Area = {$area}cm^2 <br>";
echo "Volume = {$volume}cm^3<br>"
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];

// $total  = null;

// $total = abs($x); // wartość bezwzględna
// echo $total;

// $total = round($x); // zaokrąglenie
// echo $total;

// $total = floor($x); // zaokrąglenie do dołu
// echo $total;

// $total = ceil($x); // zaokrąglenie do góry
// echo $total;

// $total = pow($x, $y); // pierwsza zmienna do potęgi drugiej zmiennej

// $total = sqrt($x); //pierwiastek

// $total = max($x, $y, $z); //wypisuje maksymalną cyfrę z podanych zmiennych

// $total = min($x, $y, $z); //wypisuje minimalną cyfrę z podanych zmiennych

// $total = pi(); // nie wpisujemy żadnych zmiennych ta funkcja po prostu podaje liczbe pi

// $total = rand(1, 100); // pierwsza zmienna to liczba od ktorej zaczynamy druga to do ktorej zaczynamy



?>