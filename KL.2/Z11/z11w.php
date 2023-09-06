<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_11 - procent z liczby</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $wartosc = $_POST['wartosc'];
    $procent = $_POST['procent'];
    $proc = $procent * 1/100;
    $wynik =  $proc * $wartosc;
    echo "$procent procent z $wartosc wynosi $wynik"
    ?>
</section>
</body>
</html>