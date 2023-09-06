<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_08 sekundy na godz, min i sek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $sek = $_POST['s'];
    $godziny = floor($sek / 3600);
    $sek = $sek % 3600;
    $m = floor($sek / 60);
    $sek = $sek % 60;
    echo "$godziny g $m min $sek sek"

    ?>
</section>
</body>
</html>
