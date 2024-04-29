<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artykuły papiernicze</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<div id="baner">
<h1>W naszym sklepie internetowym kupisz najtaniej</h1>
</div>

<div id="lewy">
<h2>Kontakt</h2>
    <p>telefon: 444333222 <br><a href="bok@sklep.pl">e-mail: bok@sklep.pl</a></p>
    <img src="promocja2.png" alt="promocja">
</div>
<div id="srodkowy">
    <?php
    $db = mysqli_connect("localhost","root","","sklep");
    $q = "SELECT nazwa FROM towary WHERE promocja = 1;";
    $wynik = mysqli_query($db,$q);

    ?>
<h2>Promocja 10% obejmuje artykuły:</h2>
    <ul>
        <?php
        while ($el = mysqli_fetch_row($wynik)) {
            echo "<li>".$el[0]."</li>";
        }
        ?>
    </ul>
</div>
<div id="prawy">
<h2>Cena wybranego artykułu w promocji</h2>
    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
        <select name="produkty">
            <option value="Gumka do mazania">Gumka do mazania</option>
            <option value="Cienkopis">Cienkopis</option>
            <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
            <option value="Markery 4 szt.">Markery 4 szt.</option>
        </select>
        <input type="submit" value="WYBIERZ">
    </form>
    <?php
    $produkty = $_POST['produkty'];
    $pom = "";
    if(isset($produkty[0])){
        $pom = "Gumka do mazania";
    } elseif(isset($produkty[1])){
        $pom = "Cienkopis";
    } elseif(isset($produkty[2])){
        $pom = "Pisaki 60 szt.";
    } elseif(isset($produkty[3])){
        $pom = "Markery 4 szt.";
    }


$q2 = "SELECT cena FROM towary WHERE nazwa =  ";
    $wynik2 = mysqli_query($db,$q2);


    $el = mysqli_fetch_row($wynik2);
        echo $el[0];


    ?>
</div>
<div id="stopka">
<h3>Autor strony: Łukasz Iwaniec 3ip_02</h3>
</div>

</body>
</html>