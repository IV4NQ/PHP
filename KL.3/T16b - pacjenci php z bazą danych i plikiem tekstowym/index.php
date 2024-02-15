<?php

$db = mysqli_connect("localhost", "root", "", "3pir_2_pacjenci");

$file = fopen("dane.txt", "r");
if (!$file) {
    die("Błąd podczas otwierania pliku dane.txt");
}
$i = 0;
while (!feof($file)) {
    $line = fgets($file);
    $data = explode(",", $line);
    $ID = trim($data[0]);
    $imie = trim($data[1]);
    $nazwisko = trim($data[2]);
    $email = trim($data[3]);

    $sql = "INSERT INTO tabela_1 (ID, imie, nazwisko, email) VALUES ('$ID', '$imie', '$nazwisko', '$email')";
    mysqli_query($db, $sql);
    $i++;
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
<br>
<?php
$db = mysqli_connect("localhost", "root", "", "3pir_2_pacjenci");

$result = $db->query("SELECT * FROM tabela_1");

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>email</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"] . "</td><td>" . $row["imie"] . "</td><td>" . $row["nazwisko"] . "</td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak danych do wyświetlenia";
}

mysqli_close($db);

?>
</body>
</html>