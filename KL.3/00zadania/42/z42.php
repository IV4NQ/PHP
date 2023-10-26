<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 42</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 42</h1>
    <h2>Autor: Łukasz Iwaniec 3ip_02</h2>
    <hr>
</header>
<section>
    <p>Dane są dwie różne liczby całkowite.
        <br>Napisz program który:
        <br>sprawdza czy podane dwie liczby całkowite są parzyste i tylko w tym przypadku wypisuje większą z nich. W
        przypadku podania liczby nieparzystej wypisuje która to liczba lub liczby.
        <br>Wejście
        <br>Na wejściu dwie różne liczby całkowite.
        <br>Wyjście
        <br>Na wyjściu większa z nich jeśli obie są parzyste lub ta liczba lub liczby jeśli są nieparzyste.
        <br>Przykład 1
        <br>4 8
        <br>8
        <br>Przykład 2
        <br>3 4
        <br>3
        <br>Przykład 3
        <br>1 7
        <br>1
        <br>7</p>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="a">Podaj a: </label>
        <input type="number" id="a" name="a">

        <label for="b">Podaj b: </label>
        <input type="number" id="b" name="b">

        <input type="submit" value="Wyślij">
    </form>
</section>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];

    function KtoraWieksza($a,$b){
        if($a>$b){
            return $a;
        } else {
            return $b;
        }
    }

    if ($a % 2 == 0 && $b % 2 == 0){
        echo "a = $a, b = $b<br>";
        echo KtoraWieksza($a,$b);
    } else if($a%2 != 0 && $b%2 == 0){
        echo "a = $a, b = $b<br>";
        echo "$a - nieparzysta";
    }else if($a%2 == 0 && $b%2 != 0){
        echo "a = $a, b = $b<br>";
        echo "$b - nieparzysta";
    }else if($a%2 != 0 && $b%2 != 0){
        echo "a = $a, b = $b<br>";
        echo "$a - nieparzysta";
        echo "<br>$b - nieparzysta";
    }

}

?>

</body>
</html>