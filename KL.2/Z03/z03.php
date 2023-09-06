<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z_03 - srednia geometryczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 03</h1>
    <h2>Autor: Łukasz Iwaniec</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią geometryczną. Wynik
        wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
    <form action="z03w.php" method="post">
        <label for="a">Podaj a:</label>
        <input type="number" id="a" name="a" step="0.01">

        <label for="b">Podaj b:</label>
        <input type="number" id="b" name="b" step="0.01">

        <label for="c">Podaj c:</label>
        <input type="number" id="c" name="c" step="0.01">

        <label for="d">Podaj d:</label>
        <input type="number" id="d" name="d" step="0.01">

        <input type="submit" value="Wyślij">
    </form>
</section>


</body>
</html>