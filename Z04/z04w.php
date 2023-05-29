<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z_04 - iloraz</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];

    if($a == 0 || $b == 0){
        echo "Nie można dzielić przez 0";
    } else {
        $wynik = round($a/$b, 2);
        echo "Wynik: $wynik";
    }

    ?>
</section>
</body>
</html>