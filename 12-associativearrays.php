<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="12-associativearrays.php" method="post">
    <label>Enter a country:</label>
    <input type="text" name="country">
    <input type="submit">
  </form>
</body>

</html>
<?php

$capitals = array(
  "USA" => "Washington D.C",
  "Japan" => "Tokyo",
  "South Korea" => "Seoul",
  "India" => "New Delhi"
);

$capital = $capitals[$_POST['country']];

echo "The capital is " . $capital;

// $capitals["USA"] = "Las Vegas";

// $capitals["China"] = "Beijing";

// array_pop($capitals); // usuwa ostatni element

// array_shift($capitals); // usuwa pierwszy element

// $keys = array_keys($capitals);

// foreach ($keys as $key => $value) {
//   echo "{$key} {$value}<br>";
// }

// foreach ($keys as $key) {
//   echo "{$key}<br>";
// }

// $values = array_values($capitals);

// $capitals = array_flip($capitals);

// $capitals = array_reverse($capitals);

// echo count($capitals);

// foreach ($capitals as $key => $value) {
//   echo "{$key} - {$value}<br>";
// }
