<?php
if (!isset($_COOKIE['dane']) && !isset($_POST['nazw'])) {
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T14b</title>
</head>
<body>
<h2>Autor: Łukasz Iwaniec 3ip_2</h2>
<hr>
<p>
    PHP Przesyłanie danych użytkownika
    (Podstawowa wersja rozwiązania)
<br>
    Utwórz skrypt, który dane użytkownika przesyłane za pomocą formularza będzie przekazywał do utworzonego pliku
    cookie. Formularz powinien zawierać imię i nazwisko użytkownika.
</p>
<hr>
<br>
<form action="index.php" method="post">
    Podaj nazwisko i imię:<br>
    <input type="text" name="nazw" value=" " size="35">
    <p><input type="submit" value="Wyślij" name="wyslij"></p>
</form>
<?php
} else {
    if (isset($_POST['nazw'])) {
        setcookie('dane', $_POST['nazw'], time() + 60 * 60 * 24 * 365);
        echo "<p>Dziękujemy za wprowadzenie danych.</p>";
    } else {
        echo "<p>Witamy po raz kolejny! " . $_COOKIE['dane'] . "</p>";
    }
}
?>
</body>
</html>