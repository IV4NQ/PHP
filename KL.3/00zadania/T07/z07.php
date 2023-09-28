<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T07 średnia</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>Zadanie T07</h1>
    <h2>Autor: Łukasz Iwaniec 3ip_02</h2>
    <hr>
</header>

<section>
    <p>Zapoznaj się z materiałem lekcji i wykonaj zadanie w którym użytkownik za pomocą formularza wprowadza następujące
        dane:
        <br>
        imię (łańcuch znaków)
        nie więcej niż cztery liczby.
        <br>
        Skrypt odczytuje te dane i w pliku wynik.php odpowiada:
        <br>
        "Witaj" z imieniem podanym przez użytkownika "na mojej stronie!!!".
        <br>
        np. Witaj Jolka na mojej stronie!!!
        <br>
        Pozostałe wartości zapisuje w tablicy, wyświetla tą tablicę (za pomocą var_dump) i po konwersji wypisuje sumę
        oraz średnią podanych wartości.
        <br>
        Uwaga!!!
        <br>
        Skrypt powinien działać nawet jeśli użytkownik zamiast liczb wprowadzi łańcuch znaków.
        Obliczając średnią sprawdźcie, ile liczb znajduje się w tablicy (4 to wartość maksymalna, ale może ich być
        mniej, bo użytkownik podał łańcuch znaków, który nie da się przekonwertować na liczbę. Aby mianownik w średniej
        był różny od 0 zakładamy, że użytkownik podał przynajmniej jedną liczbę prawidłowo).
    </p>
    <hr>
    <form action="wynik.php" method="post">

        <label for="imie">Podaj imię:</label>
        <input type="text" id="imie" name="imie">
        <hr>
        <br>
        <label for="liczba1">Podaj liczbę 1:</label>
        <input type="text" id="liczba1" name="liczba1">

        <label for="liczba2">Podaj liczbę 2:</label>
        <input type="text" id="liczba2" name="liczba2">
        <br>
        <br>
        <label for="liczba3">Podaj liczbę 3:</label>
        <input type="text" id="liczba3" name="liczba3">

        <label for="liczba4">Podaj liczbę 4:</label>
        <input type="text" id="liczba4" name="liczba4">
        <br>
        <br>
        <input type="submit" value="Wyślij">

    </form>

</section>

</body>

</html>