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
$promocja_paczki = floor($paczkow/3);
$paczkiPoPromce = $paczkow - $promocja_paczki;


$suma = 0.99 * $paczkiPoPromce + 1.29 * $grzebieni + 1.79 * $gabki;
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
	</table>
	<br /><a href="index.php">Powrót do strony głównej</a>

END;
} else {
    echo "Nie możesz złożyć zamówienia - nie masz 18 lat";
}
?>

</body>
</html>