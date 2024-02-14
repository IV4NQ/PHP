<?php

$db = mysqli_connect("localhost", "root", "", "3pir_2_pacjenci");

$file = fopen("dane.txt" ,"r");
if (!$file) {
    die("Błąd podczas otwierania pliku pracownicy.txt");
}
    while(!feof($file)) {
        $line = fgets($file);
        $data = explode(",", $line);
        $ID = trim($data[0]);
        $imie = trim($data[1]);
        $nazwisko = trim($data[2]);
        $email = trim($data[3]);

        $sql = "INSERT INTO tabela_1 (ID, imie, nazwisko, email) VALUES ('$ID', '$imie', '$nazwisko', '$email')";
        mysqli_query($db, $sql);
    }
    fclose($file);

//CREATE TABLE tabela_1 (
//    ID int(5) ,
//    imie varchar(35),
//    nazwisko varchar(60),
//    email varchar(75)
//);




mysqli_close($db);



?>


<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T16b</title>
</head>
<body>
<h2>Autor: Łukasz Iwaniec 3ip_2</h2>
<hr>
<p>

</p>
<hr>
<br>

<?php

?>
</body>
</html>