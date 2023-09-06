<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_07 - temperatura</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie </h1>
    <h2>Autor: Łukasz Iwaniec</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i Fahrenheita.</p>
    <form action="z07w.php" method="post">
        <label for="celsjusz">podaj temperaturę w <sup>o</sup>C:</label>
        <input type="number" id="celsjusz" name="celsjusz" step="0.01">

        <input type="submit" value="Wyślij">
    </form>
</section>


</body>
</html>