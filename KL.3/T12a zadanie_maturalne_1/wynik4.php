<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wynik4</title>
</head>
<body>
<?php
///zadanie 4_1
$plikWejsciowy = fopen("liczby.txt", "r");
touch('wynik.txt');
$plikWyjsciowy = fopen("wynik.txt", "w");
$licznikLiczb = 0;
$znalenionaLiczba = null;
while(($liczba = fgets($plikWejsciowy)) !== false){
    $liczba = trim($liczba);

    if($liczba[0]===$liczba[strlen($liczba)-1]){
        if($znalenionaLiczba ===null){
            $znalenionaLiczba = $liczba;
            fwrite($plikWyjsciowy, $znalenionaLiczba . PHP_EOL);
        }
        $licznikLiczb++;
    }
}

fclose($plikWejsciowy);
fclose($plikWyjsciowy);
echo "zadanie 4_1" . "<br>";
echo "ilość liczb: $licznikLiczb" . "<br>";
echo "liczba znaleziona jako pierwsza: $znalenionaLiczba" ."<br>";

///zadanie 4_2


touch('wynik_4_2.txt');
// Funkcja do obliczania liczby czynników pierwszych
function liczbaCzynnikowPierwszych($liczba)
{
    $czynniki = [];

    for ($i = 2; $i <= sqrt($liczba); $i++) {
        while ($liczba % $i == 0) {
            $czynniki[] = $i;
            $liczba /= $i;
        }
    }

    if ($liczba > 1) {
        $czynniki[] = $liczba;
    }

    return $czynniki;
}

// Otwieramy plik z liczbami do odczytu
$plikWejsciowy = fopen('liczby.txt', 'r');

// Inicjalizujemy zmienne
$najwiecejCzynnikow = 0;
$najwiecejRoznychCzynnikow = 0;
$liczbaNajwiecejCzynnikow = 0;
$liczbaNajwiecejRoznychCzynnikow = 0;

// Odczytujemy liczby z pliku
while (($liczba = fgets($plikWejsciowy)) !== false) {
    // Usuwamy ewentualne białe znaki na początku i końcu liczby
    $liczba = trim($liczba);

    // Obliczamy czynniki pierwsze
    $czynniki = liczbaCzynnikowPierwszych($liczba);

    // Liczymy ilość czynników pierwszych
    $iloscCzynnikow = count($czynniki);

    // Liczymy ilość różnych czynników pierwszych
    $iloscRoznychCzynnikow = count(array_unique($czynniki));

    // Sprawdzamy, czy aktualna liczba ma więcej czynników pierwszych
    if ($iloscCzynnikow > $najwiecejCzynnikow) {
        $najwiecejCzynnikow = $iloscCzynnikow;
        $liczbaNajwiecejCzynnikow = $liczba;
    }

    // Sprawdzamy, czy aktualna liczba ma więcej różnych czynników pierwszych
    if ($iloscRoznychCzynnikow > $najwiecejRoznychCzynnikow) {
        $najwiecejRoznychCzynnikow = $iloscRoznychCzynnikow;
        $liczbaNajwiecejRoznychCzynnikow = $liczba;
    }
}

// Zamykamy plik
fclose($plikWejsciowy);

// Zapisujemy wyniki do pliku
$plikWynikowy = fopen('wynik_4_2.txt', 'w');
fwrite($plikWynikowy, "Liczba z największą ilością czynników pierwszych: $liczbaNajwiecejCzynnikow (ilość: $najwiecejCzynnikow)\n");
fwrite($plikWynikowy, "Liczba z największą ilością różnych czynników pierwszych: $liczbaNajwiecejRoznychCzynnikow (ilość: $najwiecejRoznychCzynnikow)\n");
fclose($plikWynikowy);

// Wyświetlamy wyniki na stronie
echo "<br>";
echo "zadanie 4_2" . "<br>";
echo "Liczba z największą ilością czynników pierwszych: $liczbaNajwiecejCzynnikow (ilość: $najwiecejCzynnikow)<br>";
echo "Liczba z największą ilością różnych czynników pierwszych: $liczbaNajwiecejRoznychCzynnikow (ilość: $najwiecejRoznychCzynnikow)";


?>
</body>
</html>