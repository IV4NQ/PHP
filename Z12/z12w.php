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
        echo "<h1>Program nie spełnia wymagań min < max lub min > 0 </h1>";
    } else {
        $tab[] = 0;
        for($i = 0; $i<5; $i++) {
            $tab[$i] = rand($min, $max);
            }
    }
    $suma = 0;
    $iloczyn = 1;
    $srednia = 0;
    echo "Liczby: ";
    for($i = 0; $i<5; $i++) {
        echo "$tab[$i], ";
        $suma += $tab[$i];
        $iloczyn *= $tab[$i];
        $srednia += $tab[$i];
    }
    $srednia = $srednia/5;
    echo "<br> suma: $suma <br>";
    echo "iloczyn: $iloczyn <br>";
    echo "srednia: $srednia <br>";
    ?>
</section>
</body>
</html>