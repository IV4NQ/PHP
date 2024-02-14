<?php
$db = mysqli_connect("localhost","root","","3ip_2_baza1");
mysqli_set_charset($db,"utf8");
$q = "SELECT imie, nazwisko, stanowisko, dzial, sekcja FROM pracownicy WHERE sekcja = 'drukarki'";

$wynik = mysqli_query($db,$q);

while($el = mysqli_fetch_row($wynik) ){

    echo $el[0] . "<br>";
}
mysqli_close($db);