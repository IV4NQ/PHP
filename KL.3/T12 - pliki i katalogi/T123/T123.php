<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T123</title>
</head>
<body>
<table>
    <tr>
        <td>Imię i naziwsko:</td>
        <td>Klasa/grupa:</td>
        <td>Data:</td>
    </tr>
    <tr>
        <td>Łukasz Iwaniec</td>
        <td>3ip_02</td>
        <td>30.11.2023</td>
    </tr>
</table>
<hr>
<h2>T123</h2>

<br><br>
<p>
    W pliku imiona.txt zapisano 7 imion, każde imię w jednym wierszu (plik utwórz w edytorze tekstowym np. notatnik).
    Napisz skrypt, który odczyta imiona z pliku i wyświetli je na stronie w kolejności zapisania, oraz w kolejności
    odwrotnej.
</p>
<br>

<?php



    $tab = file('imiona.txt');
echo "Normalnie ustawione imiona:<br>";

foreach ($tab as $el){
    echo $el . "<br>";
}

echo "<br><br>Imiona wypisane odwrotnie <br>";

foreach (array_reverse($tab) as $el){
    echo $el . "<br>";
}



?>
</body>
</html>
