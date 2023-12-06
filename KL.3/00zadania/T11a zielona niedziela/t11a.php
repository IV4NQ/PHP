<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T11a</title>
</head>
<?php

$kolor = ["green","red","blue","lightblue","yellow","pink","black","gray"];
$tekstKolor = "black";
if(getdate()["wday"] == 0){
    $backgroundColor = $kolor[0];
} else {
    $backgroundColor = $kolor[rand(1,count($kolor)-1)];
}
if($backgroundColor == "black"){
    $tekstKolor = "white";
} else {
    $tekstKolor = "black";
}


?>
<body  bgcolor="<?php echo $backgroundColor ?>" style="color: <?php echo $tekstKolor ?>">

<div>
<table>
    <tr>
        <td>Imię i naziwsko:</td>
        <td>Klasa/grupa:</td>
        <td>Data:</td>
    </tr>
    <tr>
        <td>Łukasz Iwaniec</td>
        <td>3ip_02</td>
        <td>30.11.2023</td>
    </tr>
</table>
<hr>
<h2>T11a</h2>
<p>
    Utwórz stronę, której tło będzie zielone w niedziele, natomiast w pozostałe dni tygodnia kolor będzie wybierany losowo
</p>
</div>

</body>
</html>
