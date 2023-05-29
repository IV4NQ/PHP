<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_05 - dzialania</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = floor($_POST['a']);
    $b = floor($_POST['b']);

    $suma = $a + $b;
    $roznica = $a - $b;
    $iloraz = $a / $b;
    $iloczyn = $a * $b;

    echo    "suma: $suma <br>
            roznica: $roznica <br>
            iloraz: $iloraz <br>
            iloczyn: $iloczyn"
    ?>
</section>
</body>
</html>