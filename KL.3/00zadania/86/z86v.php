<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 86</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 86</h1>
    <h2>Autor: Łukasz Iwaniec 3ip_02</h2>
    <hr>
</header>
<section>
    <p>
        Napisz program, który dla podanej liczby całkowitej a losuje a liczb w zakresie <1, 9>.i wyświetla je na ekranie
        w postaci: liczba i liczba znaków ‘|’.

        <br>Przykład a=5
        <br>Wylosowane liczby: 5 3 6 3 1
        <br>5|||||
        <br>3|||
        <br>6||||||
        <br>3|||
        <br>1|

    </p>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="a">Podaj liczbę całkowitą: </label>
        <input type="number" id="a" name="a">


        <input type="submit" value="Wyślij">
    </form>
    <hr>
</section>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];

    $zbiorLosowychLiczb = [];
    for ($i = 0; $i < $a; $i++) {
        $zbiorLosowychLiczb[$i] = mt_rand(1, 9);
    }
    for ($i = 0; $i < $a; $i++) {
        echo "<b>$zbiorLosowychLiczb[$i]</b>";
        for ($j = 0; $j < $zbiorLosowychLiczb[$i]; $j++) {
            echo "<b>|</b>";
        }
        echo "<br>";
    }
}

?>

</body>
</html>