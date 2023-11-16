<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T115</title>
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
<h2>T115</h2>
<p>
    Napisz funkcję, która na podstawie danych pobranych z tablicy zwracanej przez funkcję getdate() wyświetli bieżącą
    datę. W dacie miesiąc ma być wyświetlony w postaci tekstu w języku polskim.
</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" value="URUCHOM">
</form>
<br>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    function wyswietlDate()
    {
            $miesiace = array(1 => 'styczeń', 'luty', 'marzec', 'kwiecień', 'maj', 'czerwiec', 'lipiec', 'siepień', 'wrzesień', 'październik', 'listopad', 'grudzień');
            $data = getdate();
            echo "bieżąca data:". "<br>";
            echo "godzina: $data[hours]". "<br>";
            echo "minuty: $data[minutes]". "<br>";
            echo "dzien: $data[mday]". "<br>";
            for($i=1;$i<13;$i++){
                if("$data[mon]" == $i){
                    echo "miesiąc: $miesiace[$i]". "<br>";
                }
            }
            echo "rok: $data[year]". "<br>";
    }

    wyswietlDate();


}
?>
</body>
</html>
