<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_20 kwadrat i szescian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $kwadrat = $a * $a;
    $szescian = $a * $a * $a;
    echo "kwadrat $a wynosi: $kwadrat <br>";
    echo "szescian $a wynosi: $szescian";


    ?>
</section>
</body>
</html>