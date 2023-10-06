<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Podsumowanie zamówienia</title>
</head>

<body>

<?php
$paczkow = $_POST['paczkow'];
$grzebieni = $_POST['grzebieni'];
$gabki = $_POST['gabki'];
$promocja_paczki = floor($paczkow / 3);
$paczkiPoPromce = $paczkow - $promocja_paczki;
//losowa promocja
$los_promocja = (max($paczkow, $grzebieni, $gabki) / 2);
$losowaWartoscPromocji = rand(1, $los_promocja);
$suma = 0;
$sumarabatow = 0;

$sumaProduktow = $paczkow + $grzebieni + $gabki;



if ($paczkow == $los_promocja * 2) {
    $suma = (0.99 * $paczkiPoPromce + 1.29 * $grzebieni + 1.79 * $gabki) - $losowaWartoscPromocji * 0.99;
    $sumarabatow = $losowaWartoscPromocji * 0.99;
} else if ($grzebieni == $los_promocja * 2) {
    $suma = (0.99 * $paczkiPoPromce + 1.29 * $grzebieni + 1.79 * $gabki) - $losowaWartoscPromocji * 1.29;
    $sumarabatow = $losowaWartoscPromocji * 1.29;
} else if ($gabki == $los_promocja * 2) {
    $suma = (0.99 * $paczkiPoPromce + 1.29 * $grzebieni + 1.79 * $gabki) - $losowaWartoscPromocji * 1.79;
    $sumarabatow = $losowaWartoscPromocji * 1.79;
}
$sumarabatow += $paczkiPoPromce;

function liczbapierwsza($int) {
    $i = 2;
    while($i < $int) {
        if($int % $i == 0) {
            return false;
        }

        $i++;
    }

    return true;
}

if(liczbapierwsza($sumaProduktow) == true){
$suma *= 0.9;
$sumarabatow += $suma * 0.1;
}




$dostawa1 = $_GET['dostawa'];
$dostawa2 =  $HTTP_GET_VARS['dostawa'];

echo "$dostawa1 - 1; $dostawa2 - 2";

$suma = round($suma, 2);
$sumarabatow = round($sumarabatow,2);

$dorosly = isset($_POST['dorosly']);
if ($dorosly == true) {
    echo <<<END

	<h2>Podsumowanie zamówienia</h2>
	
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<td> <img src="paczek.jpg" width="50px" height="50px" /> </td> <td>Pączek (0.99PLN/szt)</td> <td>$paczkow szt</td> 
	</tr>
	<tr>
		<td> <img src="grzebien.jpg" width="50px" height="50px" /></td> <td>Grzebień (1.29PLN/szt)</td> <td>$grzebieni szt</td>
	</tr>
		<tr>
		<td> <img src="gabki.png" width="50px" height="50px" /> </td> <td>Gąbki (1.79PLN/szt)</td> <td>$gabki szt</td>
	</tr>
	<tr>
		<td>SUMA</td> <td>$suma PLN</td>
	</tr>	
	<tr>
		<td>SUMA RABATOW</td> <td>$sumarabatow PLN</td>
	</tr>	
	</table>
	<br /><a href="index.php">Powrót do strony głównej</a>

END;
} else {
    echo "Nie możesz złożyć zamówienia - nie masz 18 lat";
}
?>

</body>
</html>