<?php
include('31-skokiDatabase.php');


$sql = 'SELECT * FROM konkursy';
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id_konkursu = $row['ID_konkursu'];
    echo '<a href="http://127.0.0.1/SKOKI/?' . $id_konkursu . '">' .  $row['ID_konkursu'] . ' ' . $row['Data'] . ' ' . $row['Miejsce'] . "</a>" . "<br>";
  }
} else {
  echo 'Pusta tabela';
}
echo "<br> <br>";
if (isset($_SERVER['QUERY_STRING'])) {
  $sql2 = 'SELECT zawodnicy.Imie, zawodnicy.Nazwisko, Skok1, Skok2, Punkty, konkursy.ID_konkursu FROM `wyniki` 
  JOIN zawodnicy ON wyniki.ID_zawodnika = zawodnicy.ID_zawodnika
  JOIN konkursy ON wyniki.ID_konkursu = konkursy.ID_konkursu
  WHERE konkursy.ID_konkursu = ' . $_SERVER['QUERY_STRING'] . ';';
  $result2 = mysqli_query($conn, $sql2);
  if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
      echo $row['Imie'] . ' ' . $row['Nazwisko'] . ' ' . $row['Skok1'] . ' ' . $row['Skok2'] . ' ' . $row['Punkty'] . "<br>";
    }
  }
} else {
  echo 'Wybierz konkurs';
}
