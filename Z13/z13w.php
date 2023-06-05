<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_13 trygonometria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $x = $_POST['x'];
    $b = sqrt( abs($x) * atan($x) * ( ( $x / ( 1 + pow($x,2) ) ) - 2 ) );
    echo "Wartość wyrażenia: $b"

    ?>
</section>
</body>
</html>