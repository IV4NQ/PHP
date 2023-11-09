<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T102</title>
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
<h2>T102</h2>
<p>Napisz funkcję, której wynikiem będzie podniesienie wartości przekazanego jej poprzez referencję argumentu do potęgi
    przekazanej również jako argument. Funkcja zwraca wartość i wyświetla wynik w postaci (np. dla wartości 2 i 3):
    <br>x = 2
    <br>y = 3
    <br>x<sup>y</sup>=2<sup>3</sup>=8</p>
<br><br>
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

    echo "a = $a<br>";
    echo "n = $n<br>";
    echo "$a<sup>$n</sup> = " . potega($a, $n);
}
?>
</body>
</html>
