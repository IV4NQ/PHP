<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 07</title>
</head>
<body>
<header>
    <h1>Zadanie 09</h1>
    <h2>Autor: Łukasz Iwaniec 3ip_02</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który zamienia długość podaną w calach na mm.
        (1cal=25,3995 mm)</p>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="cal">Długość w calach: </label>
        <input type="text" id="cal" name="cal">
        <input type="submit" value="Wyślij">
    </form>
</section>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cale = $_POST['cal'];
    $mm = $cale * 25.3995;
    echo " <br> $cale cali to $mm milimetrów";


}

?>

</body>
</html>