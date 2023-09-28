<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 07</title>
</head>
<body>
<header>
    <h1>Zadanie 07</h1>
    <h2>Autor: Łukasz Iwaniec 3ip_02</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla podanej temperatury w stopniach Celsjusza zamienia ją na stopnie Kelwina i Fahrenheita.</p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="temp">podaj temperaturę w <sup>o</sup>C: </label>
        <input type="text" id="temp" name="temp">
        <input type="submit" value="Wyślij">
    </form>
</section>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $celsjusz = $_POST['temp'];
    $farenheit = ($celsjusz * 2) +32;
    $kelvin = $celsjusz + 273.15;
    echo "$celsjusz <sup>o</sup>C w przeliczeniu na Farenheity wynosi: $farenheit <sup>o</sup>F <br>";
    echo "$celsjusz <sup>o</sup>C w przeliczeniu na Kelviny wynosi: $kelvin <sup>o</sup>F <br>";
}

?>

</body>
</html>