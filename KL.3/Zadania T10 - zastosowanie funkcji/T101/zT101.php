<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T101</title>
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
        <td>2.11.2023</td>
    </tr>
</table>
<hr>
<h2>Zadanie T101</h2>
<p>Napisz funkcję, która dla podanej liczby zwraca (return) jej wartość bezwzględną i zastosuj tę funkcję do
    wyświetlenia wyniku. Do obliczenia wartości bezwzględnej użyj instrukcji warunkowej (wariant 1) i operatora
    warunkowego "?" (wariant 2).</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="a">Podaj liczbę całkowitą: </label>
    <input type="number" id="a" name="a">


    <input type="submit" value="Wyślij">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $a = $_POST['a'];

    function bezwzgledna1($a)
    {
        if ($a < 0) {
            return $a * -1;
        } else {
            return $a;
        }
    }

    function bezwzgledna2($a)
    {
        $a = ($a > 0) ? $a : $a * -1;
        return $a;
    }

    echo "bezwzgledna funkcja nr 1: " . bezwzgledna1($a);
    echo "<br>";
    echo "bezwzgledna funkcja nr 2: " . bezwzgledna2($a);
}
?>
</body>
</html>
