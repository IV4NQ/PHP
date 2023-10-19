<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 3 x 3 wpisuje liczby pseudolosowe z zakresu <0,9>, wyświetla tą tablicę, a następnie oblicza sumę liczb rozmieszczonych wzdłuż przekątnych:

    <br>1. Przekątna LG_PD - lewy górny i prawy dolny,
    <br>2. Przekątna LD_PG - lewy dolny i prawy górny.

    <br>Program wyświetla te sumy i odpowiada na pytanie, która z nich jest większa, lub czy są równe.</p>
<hr>
<p>Autor: Łukasz Iwaniec 3ip_02</p>
<hr>
<?php
$tablica = null;

for($i = 0; $i<3; $i++){
    for($j = 0; $j<3; $j++){
        $tablica[$i][$j] = rand(0,9);
    }
}
echo "Tablica z randomowymi liczbami: <br>";
for($i = 0; $i<3; $i++){
    for($j = 0; $j<3; $j++){
        echo $tablica[$i][$j];
        echo " ";
    }
    echo "<br>";
}
$sumaLG_PD = 0;
$sumaLD_PG = 0;

for($i = 0; $i<3; $i++){
    for($j = 0; $j<3; $j++){
        if ($i===$j){
            $sumaLG_PD += $tablica[$i][$j];
        }
    }
}

$sumaLD_PG = $tablica[0][2] + $tablica[1][1] + $tablica[2][0];

echo "<br>suma przekatnych LD_PG = $sumaLD_PG";
echo "<br>suma przekatnych LG_PD = $sumaLG_PD";

echo "<br><br>Tablica wyświetlona poprzez var_dump <br><br>";
var_dump($tablica);


?>
</body>
</html>