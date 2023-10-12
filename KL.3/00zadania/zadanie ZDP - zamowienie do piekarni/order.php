<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Podsumowanie zamówienia</title>
    <link rel="stylesheet" href="style2.css">
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

function liczbapierwsza($int)
{
    $i = 2;
    while ($i < $int) {
        if ($int % $i == 0) {
            return false;
        }

        $i++;
    }

    return true;
}

if (liczbapierwsza($sumaProduktow) == true) {
    $suma *= 0.9;
    $sumarabatow += $suma * 0.1;
}
$dostawa = "Nie zaznaczono";

$dostawaOdbior = isset($_POST['dostawaOdbior']);
$dostawaKurier = isset($_POST['dostawaKurier']);
$dostawaPaczkomat = isset($_POST['dostawaPaczkomat']);
if ($dostawaOdbior == true) {
    $dostawa = "Odbiór osobisty";
} else if ($dostawaKurier == true) {
    $dostawa = "Kurier + 10.49 PLN";
    $suma += 10.49;
} else if ($dostawaPaczkomat == true) {
    $dostawa = "Paczkomat + 8.39 PLN";
    $suma += 8.39;
}
$dodatki = "";
$KolPapier = isset($_POST['KolPapier']);
$wstazka = isset($_POST['wstazka']);
$zloty_nadruk = isset($_POST['zloty_nadruk']);

if ($KolPapier == true) {
    $dodatki .= "<br>Kolorowy papier (+1.50 PLN)";
    $suma += 1.5;
}
if ($wstazka == true) {
    $dodatki .= "<br>wstążka (+0.89 PLN)";
    $suma += 0.89;
}
if ($zloty_nadruk == true) {
    $dodatki .= "<br>Złoty nadruk (+2.39 PLN)";
    $suma += 2.39;
}


$suma = round($suma, 2);
$sumarabatow = round($sumarabatow, 2);

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
		<td>SUMA</td> <td colspan="2">$suma PLN</td>
	</tr>	
	<tr>
		<td>SUMA RABATOW</td> <td colspan="2">$sumarabatow PLN</td>
	</tr>	
	<tr>
		<td>Dostawa</td> <td colspan="2">$dostawa</td>
	</tr>	
	<tr>
		<td>Dodatki</td> <td colspan="2">$dodatki</td>
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