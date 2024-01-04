<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T13</title>
    <link rel="stylesheet" href="style.css">
<body>
<header>
    <h1>Zadanie T13</h1>
    <h2>Autor: Łukasz Iwaniec 3ir_02 </h2>
    <hr>
</header>

<h2>Formularz konkursu "Podrasuj swoje buty!"</h2>
<p id="top">Chcesz zamienić swoje stare trampki na nową parę zaprojektowanych przez siebie butóe Fordefield? Napisz nam,
    dalczego
    sądzisz, że powinieneś pożeganć się ze swoimi wysłużonymi butami, a być może zostaniesz jednym z laureatów
    konkursu!</p>

<section id="danePodstawa">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset id="DaneField">
            <legend>Podstawowe dane</legend>
            <section id="DaneSection">
                <label for="imie">Imie i nazwisko:</label>
                <input type="text" id="imie" name="imie">
                <br>
                <label for="Email">E-mail: </label>
                <input type="text" id="Email" name="Email">
                <br>
                <label for="Telefon">Telefon:</label>
                <input type="text" id="Telefon" name="Telefon">
                <br>
                <label for="opis">Moje buty są TAKIE stare</label>
                <br>
                <textarea id="opis" name="opis" rows="4" cols="50">Nie więcej niż 300 znaków</textarea>
            </section>
        </fieldset>

</section>

<h2>Zaprojektuj własne trampki</h2>

<section>

    <fieldset>
        <legend>Własny projekt butów</legend>
        <fieldset id="kolor">
            <legend>Kolor <em>(wybierz jeden)</em></legend>
            <input type="radio" id="czerwony" name="color" value="czerwony" class="kolorButa">
            <label for="czerwony">czerwony</label>

            <br>
            <input type="radio" id="niebieski" name="color" value="niebieski" class="kolorButa">
            <label for="niebieski">niebieski</label>

            <br>
            <input type="radio" id="czarny" name="color" value="czarny" class="kolorButa">
            <label for="czarny">czarny</label>

            <br>
            <input type="radio" id="srebrny" name="color" value="srebrny" class="kolorButa">
            <label for="srebrny">srebrny</label>
        </fieldset>

        <section>
            <fieldset id="opcje">
                <legend>Opcje <em>(możesz wybrać kilka)</em></legend>
                <input type="checkbox" id="sznurowki" name="sznurowki" class="opcjeButa">
                <label for="sznurowki">Błyszczące sznurówki</label>
                <br>

                <input type="checkbox" id="logo" name="logo" class="opcjeButa">
                <label for="logo">Metalowe logo</label>
                <br>

                <input type="checkbox" id="podeszwy" name="podeszwy" class="opcjeButa">
                <label for="podeszwy">Świecące podeszwy</label>
                <br>

                <input type="checkbox" id="MP3" name="MP3" class="opcjeButa">
                <label for="MP3">Odtwarzanie MP3</label>
            </fieldset>
        </section>

        <section>
            <fieldset id="rozmiar">
                <legend>Rozmiar</legend>
                Rozmiar zgodny ze standardowymi numerami butów
                <select name="rozmiar">
                    <option>36</option>
                    <option>37</option>
                    <option>38</option>
                    <option>39</option>
                    <option>40</option>
                    <option>41</option>
                    <option>42</option>
                    <option>43</option>
                    <option>44</option>
                    <option>45</option>
                </select>
            </fieldset>
        </section>
    </fieldset>
    <input type="submit" value="Podrasuj swoje buty">
    </form>
</section>

<section>
    <br>

</section>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve and display data from text input
    $imie = $_POST['imie'];
    echo "<b>Imię i nazwisko: </b>" . $imie . "<br>";

    $email = $_POST['Email'];
    echo "<b>E-mail: </b>" . $email . "<br>";

    $telefon = $_POST['Telefon'];
    echo "<b>Telefon: </b>" . $telefon . "<br>";

    $opis = $_POST['opis'];
    echo "<b>Opis butów: </b>" . $opis . "<br>";

    // Retrieve and display data from radio buttons
    $color = isset($_POST['color']) ? $_POST['color'] : "";
    echo "<b>Kolor butów: </b>" . $color . "<br>";

    // Retrieve and display data from checkboxes
    $sznurowki = isset($_POST['sznurowki']) ? "Tak" : "Nie";
    echo "<b>Błyszczące sznurówki: </b>" . $sznurowki . "<br>";

    $logo = isset($_POST['logo']) ? "Tak" : "Nie";
    echo "<b>Metalowe logo: </b>" . $logo . "<br>";

    $podeszwy = isset($_POST['podeszwy']) ? "Tak" : "Nie";
    echo "<b>Świecące podeszwy: </b>" . $podeszwy . "<br>";

    $mp3 = isset($_POST['MP3']) ? "Tak" : "Nie";
    echo "<b>Odtwarzanie MP3: </b>" . $mp3 . "<br>";

    // Retrieve and display data from select dropdown
    $rozmiar = $_POST['rozmiar'];
    echo "<b>Rozmiar: </b>" . $rozmiar . "<br>";
}
?>

</body>
</html>

