<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <form action="4-getandpost.php" method="get">
    <label>username:</label> <br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log In"><br>
  </form> -->
  <!-- <form action="4-getandpost.php" method="post">
    <label>username:</label> <br>
    <input type="text" name="username"><br>
    <label>password:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log In"><br>
  </form> -->
  <form action="4-getandpost.php" method="post">
    <input type="text" name="quantity" placeholder="Quantity">
    <input type="submit" value="total">
  </form>
</body>

</html>
<?php

// echo "{$_GET["username"]}<br>";
// echo $_GET["password"] . "<br>";

// echo "{$_POST["username"]}<br>";
// echo $_POST["password"] . "<br>";

$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}<br>";
echo "Your total is: \${$total}";
?>