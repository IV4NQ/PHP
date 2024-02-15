<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T16c</title>
</head>
<body>
<h2>Autor: Łukasz Iwaniec 3ip_2</h2>
<hr>
<br>
<?php
$db = mysqli_connect("localhost", "root", "", "3pir_02_pracownicy_w_kolorze");

$result = $db->query("SELECT * FROM obywatele");

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>email</th><th>Płeć</th><th>adres IP</th><th>kolor</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr style='background-color: $row[color]'> <td>" . $row["id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td> <td>" . $row["email"] . "</td> <td>" . $row["gender"] . "</td> <td>" . $row["ip_address"] . "</td> <td>" . $row["color"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Brak danych do wyświetlenia";
}

mysqli_close($db);

?>
</body>
</html>