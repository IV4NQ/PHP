<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 06</title>
</head>
<body>
<header>
    <h1>Zadanie 06</h1>
    <h2>Autor: Łukasz Iwaniec 3ip_02</h2>
    <hr>
</header>
<section>
    Napisz program, który oblicza pole trójkąta na podstawie długości jego boków za pomocą <a
            href="https://pl.wikipedia.org/wiki/Wz%C3%B3r_Herona" target="_blank"> wzoru Herona.</a> Przykładowe liczy: 12,16,20 </p>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="a">Podaj a: </label>
        <input type="text" id="a" name="a">

        <label for="b">Podaj b: </label>
        <input type="text" id="b" name="b">

        <label for="c">Podaj c: </label>
        <input type="text" id="c" name="c">

        <input type="submit" value="Wyślij">
    </form>
</section>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if ($a == "" || is_numeric($a) == false || $b == "" || is_numeric($b) == false || $c == "" || is_numeric($c) == false) {
        echo "Nie można wykonać tego działania - niepoprawne dane";
    } else if ($a + $b > $c || $a + $c > $b || $b + $c > $a) {
        $licznik = sqrt(($a + $b + $c) * ($a + $b - $c) * ($a - $b + $c) * ((-1 * $a) + $b + $c));
        $wyn = $licznik / 4;
        if (is_nan($licznik) || is_nan($wyn)) {
            echo "Nie można wykonać tego działania - nie wykonasz z tego trójkąta";
        } else {
            echo "Pole wynosi: $wyn";
        }
    } else {
        echo " Nie można wykonać tego działania - nie wykonasz z tego trójkąta";
    }
}

?>

</body>
</html>