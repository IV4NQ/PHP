<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
<h3>T103</h3>
<p>Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku polskim. W
    przypadku podania innej wartości zwraca informację o błędzie.</p>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="a">Podaj liczbę całkowitą: </label>
    <input type="number" id="a" name="a">
    <label for="n">Podaj potęge: </label>
    <input type="number" id="n" name="n">


    <input type="submit" value="Wyślij">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $a = $_POST['a'];
    $n = $_POST['n'];

    function potega(&$a, &$n)
    {
        $wyn = 1;
        for ($i = 0; $i < $n; $i++) {
            $wyn *= $a;
        }
        return $wyn;
    }

    echo "$a<sup>$n</sup> wynosi " . potega($a, $n);
}
?>
</body>
</html>
