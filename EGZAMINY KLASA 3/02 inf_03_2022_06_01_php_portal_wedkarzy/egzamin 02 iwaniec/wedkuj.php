<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>

<div id="baner">
    <h1>Portal dla wędkarzy</h1>
</div>

<div id="lewy1">

    <h3>Ryby zamieszkujące rzeki</h3>
    <ol>
        <?php
        $db = mysqli_connect('localhost', 'root', '', 'wedkowanie');

        $zapytanie3 = "SELECT nazwa, akwen, wojewodztwo FROM ryby JOIN lowisko ON ryby.id = lowisko.ryby_id WHERE rodzaj = 3;";

        $wynik3 = mysqli_query($db, $zapytanie3);

        while ($el = mysqli_fetch_row($wynik3)) {
            echo "<li>" . $el[0] . " pływa w rzece " . $el[1] . ", " . $el[2] . "</li>";
        }

        ?>
    </ol>
</div>
<div id="prawy">
    <img src="ryba1.jpg" alt="Sum">
    <br>
    <a href="kwerendy.txt">Pobierz kwerendy</a>
</div>

<div id="lewy2">
    <h3>Ryby drapieżne naszych wód</h3>
    <table id="tabelaRyb">
        <tr>
            <th>L.p</th>
            <th>Gatunek</th>
            <th>Występowanie</th>
        </tr>
        <?php
        $zapytanie1 = "SELECT id, nazwa, wystepowanie from Ryby WHERE styl_zycia = 1;";

        $wynik1 = mysqli_query($db, $zapytanie1);

        while ($el = mysqli_fetch_row($wynik1)) {
            echo "<tr>" . "<td>" . $el[0] . "</td>" . "<td>" . $el[1] . "</td>" . "<td>" . $el[2] . "</td>" . "</tr>";
        }
        mysqli_close($db);
        ?>
    </table>
</div>


<div id="stopka">
    <p>Stronę wykonał: Łukasz Iwaniec</p>
</div>

</body>
</html>