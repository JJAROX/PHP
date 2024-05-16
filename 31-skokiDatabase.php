<?php

$db_server = 'localhost';
$db_pass = '';
$db_user = 'root';
$db_name = 'skoki';

try {
  $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception $error) {
  echo $error;
}
