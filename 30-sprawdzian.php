<?php
include('24.2-database.php');


$sql = 'SELECT * FROM dni';
$dom = new DOMDocument('1.0', 'utf-8');
try {
  $result = mysqli_query($conn, $sql);
} catch (mysqli_sql_exception) {
  echo "Brak połączenia z bazą <br>";
}


if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $form = $dom->createElement('form');
    $postAttribute = $dom->createAttribute('method');
    $postAttribute->value = 'post';
    $actionAttribute = $dom->createAttribute('action');
    $actionAttribute->value = htmlspecialchars($_SERVER['PHP_SELF']);
    $form->appendChild($postAttribute);
    $form->appendChild($actionAttribute);
    foreach ($row as $key => $value) {
      $element = $dom->createElement('input', $key);
      $domAttribute = $dom->createAttribute('type');
      $domAttribute2 = $dom->createAttribute('value');
      $domAttribute3 = $dom->createAttribute('name');
      $domAttribute->value = 'radio';
      $domAttribute2->value = $key;
      $domAttribute3->value = 'dzien';
      $br = $dom->createElement('br');
      $element->appendChild($domAttribute);
      $element->appendChild($domAttribute2);
      $element->appendChild($domAttribute3);
      $form->appendChild($element);
      $form->appendChild($br);
      $dom->appendChild($form);
    }
    $submit = $dom->createElement('input');
    $subAttribute = $dom->createAttribute('type');
    $subAttribute2 = $dom->createAttribute('name');
    $subAttribute->value = 'submit';
    $subAttribute2->value = 'submit';
    $submit->appendChild($subAttribute);
    $submit->appendChild($subAttribute2);
    $form->appendChild($submit);
  }
} else {
  echo "Nie ma dni tygodnia";
}
echo $dom->saveXML();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
  $wybrany_dzien = $_POST['dzien'];

  $stmt = mysqli_prepare($conn, "UPDATE dni SET $wybrany_dzien = $wybrany_dzien + 1");
  if ($stmt) {
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    $img = $dom->createElement('img');
    $imgAtr = $dom->createAttribute('src');
    $imgAtr->value = '29-gdlib.php';
    $img->appendChild($imgAtr);
    $dom->appendChild($img);
    echo $dom->saveXML();
  } else {
    echo "Błąd";
  }
} else {
  echo 'Zaznacz pole formularza';
}

mysqli_close($conn);
