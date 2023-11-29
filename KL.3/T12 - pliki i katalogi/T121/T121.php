<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T121</title>
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
        <td>29.11.2023</td>
    </tr>
</table>
<hr>
<h2>T121</h2>
<p>
    Zapoznaj się z materiałem lekcji. Utwórz skrypt, który:

    <br>Tworzy plik nazwisko_i_imie.txt
    <br>Tworzy plik o nazwie: doSkasowania.txt.
    <br>Kasuje plik doSkasowania.txt
    <br>Tworzy folder o nazwie zgodnej z Twoim nazwiskiem.
    <br>W tym folderze tworzy plik o nazwie nazwisko_i_imie.txt

</p>
<br><br>


<?php


    touch('nazwisko_i_imie.txt');
    touch('doSkakowania.txt');
    unlink('doSkakowania.txt');
    mkdir('Iwaniec');
touch('./Iwaniec/nazwisko_i_imie.txt')



?>
</body>
</html>
