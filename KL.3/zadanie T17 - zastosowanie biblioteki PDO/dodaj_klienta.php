<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie T17</title>
</head>
<body>
<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=3ip2_biblioteka', 'root');
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $dodaj = $pdo->exec("INSERT INTO autorzy (imie, nazwisko) VALUES('$imie', '$nazwisko')");
    if($dodaj){
        echo "Nowy autor " . $imie . " " . $nazwisko . " został dodany do bazy danych.";
    }else{
        echo "Błąd!!! Nowy autor nie został dodany do bazy!";
    }
    $pdo = null;
}catch (PDOException $e){
    echo "Błąd połączenia: " . $e->getMessage();
}
?>
</body>
</html>