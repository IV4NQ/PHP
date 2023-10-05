<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <title>Piekarnia</title>
</head>

<body>

<h1>Zamówienie online</h1>
<p>Przy zamówieniu 3 pączków płacisz za dwa.</p>
<form action="order.php" method="post">
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
    <br/><br/>
    <input type="submit" value="Wyślij zamówienie"/>
</form>

</body>
</html>