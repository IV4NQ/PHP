<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T105</title>
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
<h2>T105</h2>
<p>Napisz funkcję, która dla dwóch liczb całkowitych wyświetla ich wspólny dzielnik (przypomnij sobie algorytm
    Euklidesa).</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="a">Podaj liczbę a: </label>
    <input type="number" id="a" name="a">
    <label for="b">Podaj liczbe b:: </label>
    <input type="number" id="b" name="b">


    <input type="submit" value="Wyślij">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $a = $_POST['a'];
    $b = $_POST['b'];

    function nwd($a, $b) {
        while ($b<>0) {
            $c = $a;
            $a = $b;
            $b = $c%$b;
        }
        return $a;
    }

    echo "Wspólny dzielnik $a oraz $b wynosi:" . nwd($a, $b);

}
?>
</body>
</html>
