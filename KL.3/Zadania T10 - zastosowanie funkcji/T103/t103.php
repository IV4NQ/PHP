<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T103</title>
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
        <td>8.11.2023</td>
    </tr>
</table>
<hr>
<h3>T103</h3>
<p>Napisz funkcję, która dla podanej liczby całkowitej w zakresie od 1 do 12 zwraca nazwę miesiąca w języku polskim. W
    przypadku podania innej wartości zwraca informację o błędzie.</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="a">Podaj numer miesiąca: </label>
    <input type="number" id="a" name="a">



    <input type="submit" value="Wyślij">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $a = $_POST['a'];
    switch ($a) {
        case 1:
            echo "Styczeń";
            break;
        case 2:
            echo "Luty";
            break;
        case 3:
            echo "Marzec";
            break;
        case 4:
            echo "Kwiecień";
            break;
        case 5:
            echo "Maj";
            break;
        case 6:
            echo "Czerwiec";
            break;
        case 7:
            echo "Lipiec";
            break;
        case 8:
            echo "Sierpień";
            break;
        case 9:
            echo "Wrzesień";
            break;
        case 10:
            echo "Październik";
            break;
        case 11:
            echo "Listopad";
            break;
        case 12:
            echo "Grudzień";
            break;
        default:
            echo "Nie ma takiego miesiąca - błędna liczba";
            break;
    }
}
?>
</body>
</html>
