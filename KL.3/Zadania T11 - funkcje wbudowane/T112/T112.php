<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>T112</title>
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
<h2>T112</h2>
<p>
    Dana jest tablica zawierająca imiona. Napisz funkcję, która wypisuje ilość imion żeńskich zapisanych w tablicy. Dla
    uproszczenia zakładamy, że imiona żeńskie to te, które kończą się na literę "a".
</p>
<br><br>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="submit" value="URUCHOM">
</form>
<br>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tab = array("Eliza", "Jakub", "Amelia", "Kuba", "Barnaba", "Jerzy", "Karolina", "Zbyszek","Wacława");

    function wyswietlTablice($tab){
        echo "Podstawowa tablica:" . "<br>";
        foreach ($tab as $el){
            echo "$el, ";
        }
    }

    function iloscKobiet($tab)
    {
        $pom = 0;
        for ($i = 0; $i < count($tab); $i++) {
            if($tab[$i] == "Kuba" || $tab[$i] == "Barnaba"){

            }elseif($tab[$i][strlen($tab[$i]) - 1] == "a"){
                $pom++;
            }
        }
        echo "Ilość imion żeńskich: $pom";
    }
    wyswietlTablice($tab);
    echo "<br><br>";
iloscKobiet($tab);



}
?>
</body>
</html>
