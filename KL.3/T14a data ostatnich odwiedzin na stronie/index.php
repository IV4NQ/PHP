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
<h2>Autor: Łukasz Iwaniec 3ip_2</h2>
<hr>
<p>
    PHP zastosowanie plików cookies
<br>
    Napisz skrypt tworzący plik cookie wizyta - określający datę ostatnich odwiedzin strony przez użytkownika oraz
    skrypt odczytujący tę informację.
</p>
<hr>
<br>
<?php

$mies = 2592000 + time();
setcookie("wizyta", date("F jS - g:ia"), $mies);

if (isset($_COOKIE['wizyta'])) {

    $ostatnia = $_COOKIE['wizyta'];
    echo "Witamy ponownie! <br> Ostatni raz odwiedziłeś nas: " . $ostatnia;
} else {
    echo "Witamy na naszej stronie!";
}


?>
</body>
</html>