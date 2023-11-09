<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T104</title>
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
        <td>9.11.2023</td>
    </tr>
</table>
<hr>
<h2>T104</h2>
<p>Napisz funkcję, która będzie przyjmowała dwa argumenty liczbowe i będzie wypisywała mniejszą z nich w kolorze
    zielonym, a większą w czerwonym. W przypadku podania liczb jednakowych obie należy wyświetlić w kolorze
    niebieskim.</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="a">Podaj liczbe a: </label>
    <input type="number" id="a" name="a">
    <label for="b">Podaj liczbe b: </label>
    <input type="number" id="b" name="b">


    <input type="submit" value="Wyślij">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $a = $_POST['a'];
    $b = $_POST['b'];
function ktora($a,$b){
    if($a > $b){
        echo "<h3 id='green'>$b</h3>";
        echo "<h3 id='red'>$a</h3>";
    } else if ($b > $a){
        echo "<h3 id='green'>$a</h3>";
        echo "<h3 id='red'>$b</h3>";
    }   else if ($a == $b){
        echo "<h3 id='blue'>$a</h3>";
        echo "<h3 id='blue'>$b</h3>";
    }
}
ktora($a,$b);


}
?>
</body>
</html>
