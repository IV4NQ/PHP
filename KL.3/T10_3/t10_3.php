<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T13_3</title>
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
        <td>9.11.2023</td>
    </tr>
</table>
<hr>
<h2>T10_3</h2>
<p>


    Dana jest tablica tab zawierająca liczby oraz liczba m o określonej wartości.

    <br>Napisz funkcję, która
<ul>
    <li>wyświetli tablicę w formie tabeli HTML,</li>
    <li>przemnoży wszystkie elementy tablicy tab przez czynnik m.</li>
    <li>zamieni wszystkie elementy w tablicy równe 0 na 1.</li>
</ul>
<br>Zademonstruj działanie funkcji w programie.

</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="a">Podaj liczbe a: </label>
    <input type="number" id="a" name="a">
    <label for="b">Podaj liczbe b: </label>
    <input type="number" id="b" name="b">


    <input type="submit" value="Wyślij">
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tab = [1, 5, 4, 2, 6, 7, 1, 3, 5, 6, 1, 2, 6, 7, 1, 2, 4, 5];

    function wyswietlTablice(&$tab)
    {
        echo "<table>";
        foreach ($tab as $i => $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</table>";
    }

    function pomnoz(&$tab, $m)
    {
        $n = count($tab);
        for ($i = 0; $i < $n; $i++) {
            $tab[$i] = $tab[$i] * $m;
        }
        return $tab;
    }

//    function sprawdz(&$tab)
//    {
//        $n = count($tab);
//        for ($i = 0; $i < $n; $i++) {
//            if ($tab[$i] == 0) {
//                $tab[$i] = 1}
//        }
//    }

}
?>
</body>
</html>
