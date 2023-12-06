<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>wynik4</title>
</head>
<body>
<?php

$plikWejsciowy = fopen("liczby.txt", "r");
$licznikLiczb = 0;
$znalenionaLiczba = null;
while(($liczba = fgets($plikWejsciowy)) !== false){
    $liczba = trim($liczba);

    if($liczba[0]===$liczba[strlen($liczba)-1]){
        if($znalenionaLiczba ===null){
            $znalenionaLiczba = $liczba;
            echo "$znalenionaLiczba";
        }
    }
}


?>
</body>
</html>