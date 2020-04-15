<?php
    $zmiennaInt = 51;
    $zmiennaFloat = 43.2;
    $zmiennaString = "przykładowy tekst";
    $tekstZawierajacyZmienne = "integer: $zmiennaInt, float: $zmiennaFloat";

    $tablica = ['red', 'green', 'blue'];
    $tablica[] = 'yellow'; // dodawanie elementu na koniec tablicy
    $tablica[] = 'orange';
    
    $tablicaAsoc = ['klucz1' => 'wartosc1', 'klucz2' => 'wartosc2'];
    $tablicaAsoc['klucz3'] = 'wartosc3';
    
    var_dump($tablicaAsoc);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Przykład 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <p>Paragraf statyczny</p>
    
    <?php
        echo "<p>Paragraf dynamiczny</p>";
    ?>
</body>
</html>