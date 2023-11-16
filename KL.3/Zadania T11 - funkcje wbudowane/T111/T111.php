<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T111</title>
</head>
<body>
<table>
    <tr>
        <td>Imię i naziwsko:</td>
        <td>Klasa/grupa:</td>
        <td>Data:</td>
    </tr>
    <tr>
        <td>Łukasz Iwaniec</td>
        <td>3ip_02</td>
        <td>16.11.2023</td>
    </tr>
</table>
<hr>
<h2>T111</h2>
<p>
    Dana jest tablica zawierająca liczby. Napisz funkcję, która po otrzymaniu tej tablicy jako argumentu zwraca sumę
    dwóch najmniejszych liczb zapisanych w tablicy.
</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" value="URUCHOM">
</form>
<br>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tab = array(1,5,4,6,8,3,2,5,6,7,2,3,5,6,2);

    function dodajNajmniejszeLiczby($tab){
        sort($tab);
        $suma = $tab[0] + $tab[1];
        echo "$suma";
    }
    dodajNajmniejszeLiczby($tab);

}
?>
</body>
</html>
