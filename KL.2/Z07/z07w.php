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
    $celsjusz = $_POST['celsjusz'];
    $Fahrenheit = ($celsjusz * (9/5)) + 32;
    $kelvin = $celsjusz + 273.15;

    echo    "Temperatura Celsjusza: $celsjusz <sup>o</sup>C <br>
            Temperatura Fahrenheita: $Fahrenheit <sup>o</sup>F <br>
            Temperatur Kelvina $kelvin <sup>o</sup>K "

    ?>
</section>
</body>
</html>