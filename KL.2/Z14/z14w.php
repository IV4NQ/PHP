<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_14 tabliczka mnozenia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $x = floor($_POST['x']);
    $tab[] = 0;
    echo "x = $x <br>";
    for($i = 0; $i <= 10; $i++){
        $tab[$i] = $i;
        $wynik = $x * $tab[$i];
        echo "$x * $tab[$i] = $wynik <br>";
    }
    ?>
</section>
</body>
</html>