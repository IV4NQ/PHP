<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 62</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 62</h1>
    <h2>Autor: Łukasz Iwaniec 3ip_02</h2>
    <hr>
</header>
<section>
<p>Napisz program, który dla podanej wartości wyświetla ocenę wyrażoną słownie według następującego klucza:
    0 – nieklasyfikowany
    1,2,3 – poprawny
    4,5 – dobry
    6 – wyróżniający.
    Na pozostałe wartości reaguje wyświetleniem komunikatu: „niewłaściwa liczba”.</p>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="ocena">Podaj liczbę całkowitą: </label>
        <input type="number" id="ocena" name="ocena">


        <input type="submit" value="Wyślij">
    </form>
    <hr>
</section>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ocena = $_POST['ocena'];

    switch ($ocena) {
        case 0:
            echo "nieklasyfikowany";
            break;
        case 1:
        case 2:
        case 3:
            echo "poprawny";
            break;
        case 4:
        case 5:
            echo "dobry";
            break;
        case 6:
            echo "wyróżniający";
            break;
        default:
            echo "Niewłaściwa liczba";
    }
}

?>

</body>
</html>