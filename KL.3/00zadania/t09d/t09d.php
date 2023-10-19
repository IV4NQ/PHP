<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Napisz program, który tworzy dwuwymiarową tablicę o wymiarach 4 x 4 i wypełnia ją liczbami pseudolosowymi  z zakresu <0,1>, wyświetla tą tablicę z zachowaniem wierszy i kolumn, a następnie:
    <br>
    <br>wyświetla te wiersze tablicy w których suma liczb jest największa,
    <br>tworzy "odwróconą" tablicę (ostatni wiersz pierwszej tablicy jest pierwszą kolumną drugiej i tak dalej - tablica wygląda jak obrócona w prawo o 90o), a następnie wyświetla ją na ekranie.
    <br>
    <br>przykład odwrócenia
    <br>
    <br>0001
    <br>0010
    <br>0100
    <br>0100
    <br>
    <br>tablica po odwróceniu:
    <br>
    <br>0000
    <br>1100
    <br>0010
    <br>0001</p>
<hr>
<p>Autor: Łukasz Iwaniec 3ip_02</p>
<hr>
<?php

$tablica = array();
for ($i = 0; $i < 4; $i++) {
    $tablica[] = array();
    for ($j = 0; $j < 4; $j++) {
        $tablica[$i][$j] = rand(0, 1);
    }
}


echo "Oryginalna tablica:<br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $tablica[$i][$j];
        echo " ";
    }
    echo "<br>";
}


$maxSum = 0;
$maxIndex = 0;
for ($i = 0; $i < 4; $i++) {
    $sumaWiersza = array_sum($tablica[$i]);
    if ($sumaWiersza > $maxSum) {
        $maxSum = $sumaWiersza;
        $maxIndex = $i;
    }
}


echo "Wiersz z największą sumą liczb: ";
echo $maxIndex + 1;
echo "<br>";
for ($j = 0; $j < 4; $j++) {
    echo $tablica[$maxIndex][$j] . " ";
}
echo "<br>";


$odwroconaTablica = array();
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $odwroconaTablica[$j][$i] = $tablica[3-$i][$j];
    }
}


echo "Odwrócona tablica:<br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $odwroconaTablica[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>

</body>
</html>


