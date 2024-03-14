<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artykuły biurowe</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div id="baner">
<h1>W naszej hurtowni kupisz najtaniej</h1>
</div>

<div id="lewy">
<h4>Ile będą kosztować Twoje zakupy?</h4>

    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        wybierz artykuł <select name="produkty">
            <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
            <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
            <option value="Cyrkiel">Cyrkiel</option>
            <option value="Linijka 30 cm">Linijka 30 cm</option>
            <option value="Ekierka">Ekierka</option>
            <option value="Linijka 50 cm">Linijka 50 cm</option>
        </select>
        <br>
        liczba sztuk: <input name="ilosc" type = "number" value="0">
        <br>
        <input type = "submit" value="OBLICZ">
    </form>
<?php
$db = mysqli_connect("localhost","root","","sklep");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ilosc = $_POST['ilosc'];
    $produkty = $_POST['produkty'];

    $q2 = "SELECT cena FROM towary WHERE nazwa = \"$produkty\";";
    $wynik2 = mysqli_query($db, $q2);
    $el = mysqli_fetch_row($wynik2);
    $cena = $el[0] * $ilosc;
    round($cena, 1);
    echo "Cena za $ilosc sztuk $produkty , wyniesie $cena zł";

    mysqli_close($db);
}
?>
</div>

<div id="srodek">
<img src="zakupy2.png" alt="hurtownia"/>
    <h4>Kontakt</h4>
    <p>telefon: 888999777 <br> e-mail: <a href="hurt@wp.pl">hurt@wp.pl</a></p>
</div>

<div id="prawo">
<h4>Ceny wybranych artykułów w hurtowni:</h4>
    <table>
    <?php
    $db = mysqli_connect("localhost","root","","sklep");

    $q1 = "SELECT nazwa, cena FROM towary LIMIT 4;";

    $wynik = mysqli_query($db,$q1);

    while ($el = mysqli_fetch_row($wynik)) {
        echo "<tr>" . "<td>" . $el[0] . "</td>" . "<td>" . $el[1] . "</td>". "</tr>";
    }
    mysqli_close($db);
    ?>

    </table>
</div>

<div id="stopka">
    <h2>Witrynę wykonał: Łukasz Iwaniec 3ip_2</h2>
</div>



</body>
</html>