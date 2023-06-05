<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_16 funkcje trygonometryczne</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $x = $_POST['x'];
    $wynik = 10 / ((pow(M_E, $x)) * (1+ (pow($x, 4))));
    echo "wartość wyrazenia: $wynik";
    ?>
</section>
</body>
</html>