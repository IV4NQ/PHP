<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T132</title>
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
        <td>07.12.2023</td>
    </tr>
</table>
<hr>
<h2>T132</h2>
<p>
    Zdefiniuj klasę czołg. Czołg powinien mieć następujące właściwości:
    <br>
    <br>nazwa,
    <br>kolor,
    <br>ilość amunicji
    <br>
    <br>oraz metody:
    <br>
    <br>info() – wyświetlająca informację o czołgu,
    <br>pomaluj() – zmieniająca kolor czołgu,
    <br>załaduj() – zwiększająca ilość amunicji,
    <br>strzelaj() – wyświetla komunikat i zmniejsza ilość amunicji o 1 (w wariancie rozwiniętym należy uniemożliwić
    wykonanie strzału jeśli nie ma amunicji).
    <br>
    <br>Utwórz obiekt klasy czołg i przetestuj działanie metod.
</p>
<br><br>


<?php

class Czolg
{
    public $nazwa, $kolor, $iloscAmunicji;


    function wprowadzDane($nazwa, $kolor, $iloscAmunicji){
        $this->nazwa = $nazwa;
        $this->kolor = $kolor;
        $this->iloscAmunicji = $iloscAmunicji;
    }
    function info()
    {
        echo "<br>";
        echo "Nazwa czołgu to " . $this->nazwa . "<br>";
        echo "Kolor czołgu to " . $this->kolor . "<br>";
        echo "Ilość amunicji czołgu to " . $this->iloscAmunicji . "<br>";
    }

    function pomaluj($kolor){
        $this->kolor = $kolor;
    }

    function zaladuj(){
        $this->iloscAmunicji++;
    }

    function strzelaj(){
        if($this->iloscAmunicji == 0){
            echo "<br>Nie masz już amunicji! Załaduj ją";
        } else {
            echo "<br>Wystrzelono pocisk!";
            $this->iloscAmunicji--;
        }

    }
}


$czolg = new Czolg();
//$czolg->nazwa = "Pedrak";
//$czolg->kolor = "niebieski";
//$czolg->iloscAmunicji = 15;

$czolg -> wprowadzDane("Tygrys", "Fioletowy", 2);

$czolg -> info();
$czolg ->pomaluj("Niebieski");
$czolg -> info();
$czolg -> strzelaj();
$czolg -> strzelaj();
$czolg -> strzelaj();
$czolg -> zaladuj();
$czolg -> info();

?>
</body>
</html>
