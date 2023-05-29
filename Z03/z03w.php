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
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    $srednia = $a + $b + $c + $d;
    $pierwiastek = ($srednia)**1/4;
    $srednia_zaokraglona = round($pierwiastek, 3);

    echo    "a: $a <br>
            b: $b <br>
            c: $c <br>
            d: $d <br>
            srednia: $pierwiastek
            srednia zaokraglona: $srednia_zaokraglona"
    ?>
</section>
</body>
</html>