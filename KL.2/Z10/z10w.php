<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_10 - działanie z x</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $x = $_POST['x'];
    if($x<0){
        $x = $x * -1;
    }
    $licznik = $x * $x;
    $mianownik = ($x + 1) * ($x +1);
    $wynik = $licznik/$mianownik;
    echo "Wartość wyrażenia wynosi: $wynik"

    ?>
</section>
</body>
</html>