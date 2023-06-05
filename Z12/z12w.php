<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>z_12 liczby pseudolosowe</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">
    <?php
    $min = $_POST['min'];
    $max = $_POST['max'];
    if($min > $max || $min < 0){
        echo "Program nie spełnia wymagań min < max lub min > 0";
    } else {
        $tab[] = 0;
        for($i = 0; $i<5; $i++) {
            $tab[$i] = rand($min, $max);
            }
    }
    for($i = 0; $i<5; $i++) {
        echo "$tab[$i]  ";
    }
    ?>
</section>
</body>
</html>