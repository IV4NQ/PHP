<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T131</title>
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
<h2>T131</h2>
<p>
    Tu przesyłamy kod z klasą Osoba z dodanym polem wiek.
</p>
<br><br>


<?php



class osoba
{
    public $id, $nazwisko, $imie, $wiek;

    function wpiszWiek($wiek)
    {
        $this->wiek = $wiek;
    }
    function pobierzWiek(){
        return $this->wiek;
    }
    function wpiszNazwisko($arg1)
    {
        $this->nazwisko = $arg1;
    }

    function pobierzNazwisko()
    {
        return $this->nazwisko;
    }

    function wpiszImie($arg2)
    {
        $this->imie = $arg2;
    }

    function pobierzImie()
    {
        return $this->imie;
    }

    function wpiszId($arg3)
    {
        $this->id = $arg3;
    }

    function pobierzId()
    {
        return $this->id;
    }
}

$postac1 = new osoba();
$postac2 = new osoba();
$postac1->nazwisko = 'Kowalski';
$postac1->imie = 'Jan';
$postac1->id = 1;
$postac1->wiek = 19;

$postac2->wpiszNazwisko('Nowak');
$postac2->wpiszImie('Adam');
$postac2->wpiszId(2);
$postac2->wpiszWiek(17);

echo $postac1->nazwisko . " " . $postac1->imie . " " . $postac1 -> wiek;
echo "<br>";
echo $postac2->pobierzNazwisko() . " osoba.php " . $postac2->pobierzImie() . " wiek: " . $postac2 -> pobierzWiek();




?>
</body>
</html>
