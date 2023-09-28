<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 07</title>
</head>
<body>
<header>
    <h1>Zadanie 08</h1>
    <h2>Autor: Łukasz Iwaniec 3ip_02</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który przelicza czas podany w sekundach na zapis uwzględniający godziny, minuty oraz sekundy.
        Program zadziała dla s większego od 0.
        Przykład: dla s = 4000 wynikiem powinien być ciąg znaków : 1g6m40s</p>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="sek">podaj ilość sekund s: </label>
        <input type="text" id="sek" name="sek">
        <input type="submit" value="Wyślij">
    </form>
</section>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $s = $_POST['sek'];
    $g = floor($s/3600);
    $reszG = $s%3600;
    $min = floor($reszG/60);
    $reszM = $reszG%60;
    $sekund = $reszM;

echo "$g g $min min $sekund s <br>";


}

?>

</body>
</html>