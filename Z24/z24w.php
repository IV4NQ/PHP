<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_24 pole i objetosc kuli</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $PolePow = (4*M_PI) * ($a*$a);
    $Obj = ((M_PI*4)/3) * ($a*$a*$a);
    echo "Pole powierzchni wynosi: $PolePow <br>";
    echo "Objętość wynosi: $Obj <br>";

    ?>
</section>
</body>
</html>