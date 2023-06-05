<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_12 liczby pseudolosowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 12</h1>
    <h2>Autor: Łukasz Iwaniec</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla podanych wartości całkowitych min i max, gdzie min < max i min > 0 oblicza 5 liczb pseudolosowych z zakresu min, max, wyświetla te liczby, a następnie oblicza i wyświetla ich sumę, iloczyn i średnią.</p>
    <form action="z12w.php" method="post">
        <label for="min">Podaj min:</label>
        <input type="text" id="min" name="min">

        <label for="max">Podaj max:</label>
        <input type="text" id="max" name="max">

        <input type="submit" value="Wyślij">
    </form>
</section>


</body>
</html>