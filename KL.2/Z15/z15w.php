<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZADANIE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $x = $_POST['x'];
    $sinus = sin(M_PI * $x);
    $cosinus = cos((M_PI*$x)/2)*2;
    $dodaj = $sinus + $cosinus;
    $wynik = $dodaj * $dodaj;
    echo "Wartość wyrażenia: $wynik"
    ?>
</section>
</body>
</html>