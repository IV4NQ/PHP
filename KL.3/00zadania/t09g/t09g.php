<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<p>Dana jest następująca tablica:

    <br>$players = [];
    <br>$players[] = ["Nazwisko" => "Ronaldo", "Wiek" => 31, "Kraj" => "Portugalia","Drużyna" => "Real Madrid"];
    <br>$players[] = ["Nazwisko" => "Messi", "Wiek" => 27, "Kraj" => "Argentyna", "Drużyna"=> "Barcelona"];
    <br>$players[] = ["Nazwisko" => "Neymar", "Wiek" => 24, "Kraj" => "Brazylia", "Drużyna"=> "Barcelona"];
    <br>$players[] = ["Nazwisko" => "Rooney", "Wiek" => 30, "Kraj" => "Anglia", "Drużyna"=> "Man United"];

    <br>Dopisz kod, który wyświetli tablicę wraz z nazwami kluczy.</p>
<hr>
<h3>Autor: Łukasz Iwaniec 3ip_02</h3>
<hr>

<?php
$players = [];
$players[] = ["Nazwisko" => "Ronaldo", "Wiek" => 31, "Kraj" => "Portugalia", "Drużyna" => "Real Madrid"];
$players[] = ["Nazwisko" => "Messi", "Wiek" => 27, "Kraj" => "Argentyna", "Drużyna" => "Barcelona"];
$players[] = ["Nazwisko" => "Neymar", "Wiek" => 24, "Kraj" => "Brazylia", "Drużyna" => "Barcelona"];
$players[] = ["Nazwisko" => "Rooney", "Wiek" => 30, "Kraj" => "Anglia", "Drużyna" => "Man United"];

foreach ($players as $gracz) {
    foreach ($gracz as $klucz => $wartosc) {
        echo "<b>$klucz: $wartosc, </b>";
    }
    echo "<br>";
}
?>

</body>
</html>

