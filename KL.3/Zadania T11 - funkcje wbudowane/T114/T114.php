<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T114</title>
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
<h2>T114</h2>
<p>
    Napisz funkcję, która dla podanej daty w postaci mm, dd, YY sprawdzi, czy jest to prawidłowa data i jeśli tak
    sprawdzi, czy jest to data z przeszłości. Jeśli tak funkcja wypisze słowo „historia”, a jeśli nie wypisze
    „teraźniejszość lub przyszłość”. W przypadku błędnej danej funkcja kończy działanie i wyświetla komunikat o błędnej
    dacie.
</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" value="URUCHOM">
</form>
<br>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $dzien = 15;
    $miesiac = 11;
    $rok = 2011;

    function wpisanaData($dzien, $miesiac, $rok){
        echo "Data, którą wpisałeś:" . "<br>";
        echo "Dzień - $dzien". "<br>";
        echo "Miesiąc - $miesiac". "<br>";
        echo "Rok - $rok". "<br>";
    }

    function sprawdzajDate($miesiac, $dzien, $rok)
    {

        if (checkdate($miesiac, $dzien, $rok)) {
            $data = mktime(0, 0, 0, $miesiac, $dzien, $rok);
            $dzis = mktime(0, 0, 0, date("m"), date("d"), date("y"));
            if ($data > $dzis || $data == $dzis) {
                echo "Teraźniejszość lub przyszłość";
            } else {
                echo "Historia";
            }
        } else {
            echo 'Data jest niepoprawna';
        }
    }
    wpisanaData($dzien, $miesiac, $rok);
    echo "<br><br>";
    sprawdzajDate($miesiac, $dzien, $rok);


}

?>
</body>
</html>
