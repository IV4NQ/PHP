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
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if($a + $b < $c || $a + $c < $b || $b + $c < $a){
        echo "<h1> Liczby nie spełniają wymogu - z tych liczb nie można stworzyć trójkąta </h1>";
    } else {
        $p = 1/2*($a + $b + $c);
        $s = sqrt($p*($p-$a)*($p-$b)*($p-$c));
        echo "<h1> Pole trójkąta wynosi: $s </h1>";
    }


    ?>
</section>
</body>
</html>