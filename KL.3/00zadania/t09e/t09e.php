<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Napisz program w którym do jednowymiarowej tablicy znakowej wpisanych jest 10 znaków podanych przez użytkownika, a
    następnie:

    <br>pyta użytkownika o długość losowego słowa oraz ilość słów,
    <br>wyświetla wzorcową 10 znakową tablicę,
    <br>wyświetla podaną ilość słów składających się z podanej ilości znaków wygenerowanych ze znaków zapisanych w
    10-elementowej tablicy stworzonej na początku programu.
</p>
<hr>
<p>Autor: Łukasz Iwaniec 3ip_02</p>
<hr>

<h1>Generator losowych słów</h1>
<form method="post" action="<?php ?>">
    <label for="litery">Podaj 10 znaków (jednoliterowych - przyklad "poiuytrewq"):</label>
    <input type="text" name="litery" id="litery" required><br>

    <label for="dlugoscSlowa">Długość losowego słowa:</label>
    <input type="number" name="dlugoscSlowa" id="dlugoscSlowa" required><br>

    <label for="iloscSlow">Ilość słów do wygenerowania:</label>
    <input type="number" name="iloscSlow" id="iloscSlow" required><br>

    <input type="submit" value="Generuj">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $litery = $_POST["litery"];
    $dlugoscSlowa = $_POST["dlugoscSlowa"];
    $iloscSlow = $_POST["iloscSlow"];


    echo "Wzorcowa tablica: " . $litery . "<br>";


    function generujLosoweSlowa($litery, $dlugoscSlowa)
    {
        $randomSlowo = "";
        $licznikLiter = strlen($litery);

        for ($i = 0; $i < $dlugoscSlowa; $i++) {
            $randomLitera = $litery[rand(0, $licznikLiter - 1)];
            $randomSlowo .= $randomLitera;
        }
        return $randomSlowo;
    }


    for ($i = 0; $i < $iloscSlow; $i++) {
        $randomSlowo = generujLosoweSlowa($litery, $dlugoscSlowa);
        echo "Losowe słowo " . ($i + 1) . ": " . $randomSlowo . "<br>";
    }
}
?>
</body>
</html>