<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T17</title>

</head>
<body>
<h1>Zadanie T17</h1>
<h2>Autor: Łukasz Iwaniec 3ip_02</h2>
<hr>
<p>
    Utwórz podobnie jak w ćwiczeniu 6.29 (z podręcznika) skrypt, który dane pobrane z formularza będzie dodawał w bazie
    3ip2_biblioteka (zaimportuj ją z załączonego pliku biblioteka.sql) do tabeli autorzy. W skrypcie zastosuj polecenia
    mysqli zorientowanego obiektowo.
</p>
<hr>
<form action="dodaj_klienta.php" method="post">
    <p>Rejestracja klienta:</p>
    Imię:<br>
    <input type="text" name="imie" value="" size="30" maxlength="15"><br>
    Nazwisko:<br>
    <input type="text" name="nazwisko" value="" size="30" maxlength="30"><br>
    <p><input type="submit" value="Wyślij" name="wyslij"><input type="reset" value="Wyczyść" name="zeruj"></p></form>

</body>
</html>