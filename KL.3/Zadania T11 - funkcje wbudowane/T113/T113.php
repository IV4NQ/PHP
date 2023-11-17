<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T113</title>
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
        <td>16.11.2023</td>
    </tr>
</table>
<hr>
<h2>T113</h2>
<p>
    Dane są dwie tablice. Napisz funkcję, która otrzymuje obie tablice w argumencie i zwraca posortowaną tablicę
    zawierającą wszystkie elementy z pierwszej i drugiej tablicy.
</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" value="URUCHOM">
</form>
<br>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tab1 = array(5, 2, 6, 2, 535, 74, 6, 4, 3, 2523, 1, 6, 7, 4, 2, 3);
    $tab2 = array(7, 6, 4, 24, 324, 6, 34, 512, 423412, 62, 746, 325, 134512243, 25, 234, 2, 1, 6, 7);

    function wyswietlTablice($tab, $tab2)
    {
        echo "Podstawowa tablica nr 1:" . "<br>";
        foreach ($tab as $el) {
            echo "$el, ";
        }
        echo "<br>" . "Podstawowa tablica nr 2:" . "<br>";
        foreach ($tab2 as $el) {
            echo "$el, ";
        }
    }

    function posortuj($tab1, $tab2)
    {
        $do_sortu = array_merge($tab1, $tab2);
        sort($do_sortu);
        return $do_sortu;
    }

    wyswietlTablice($tab1, $tab2);
    echo "<br><br>";
    $posortowana = posortuj($tab1, $tab2);
    echo "Posortowana tablica:";
    foreach ($posortowana as $el) {
        echo "$el, ";
    }
}
?>
</body>
</html>
