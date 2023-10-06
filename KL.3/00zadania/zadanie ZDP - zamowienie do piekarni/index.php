<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Piekarnia</title>
</head>

<body>

<h1>Zamówienie online</h1>
<p>Przy zamówieniu 3 pączków płacisz za dwa.</p>
<p>Dostajesz losową promocję za produkt którego jest najwięcej (losowa liczba darmowych produktów)</p>
<p>Jeżeli ilość zamówionych produktów jest liczbą pierwszą otrzymujesz rabat 10%</p>
<form action="order.php" method="post">
    <h3>Produkty</h3>
    Ile pączków (0.99 PLN/szt):
    <input type="text" name="paczkow"/>
    <br/><br/>
    Ile grzebieni (1.29 PLN/szt):
    <input type="text" name="grzebieni"/>
    <br/><br/>
    Ile gąbek (1.79 PLN/szt):
    <input type="text" name="gabki"/>
    <br/><br/>
    Czy masz 18 lat?
    <input type="checkbox" name="dorosly">
    <br/>
    <h3>Sposób dostawy</h3>
    <br/>
    Odbiór osobisty (darmowe)
    <input type="radio" name="dostawa" value="0">
    <br/><br/>
    Kurier (10.49 PLN)
    <input type="radio" name="dostawa" value="10.49">
    <br/><br/>
    Paczkomat (8.39 PLN)
    <input type="radio" name="dostawa" value="8.39">
    <br/><br/>
    <input type="submit" value="Wyślij zamówienie"/>

</form>

</body>
</html>