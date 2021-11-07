<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="favicon.ico">
        <title>BitClub | PHP Exercise 1</title>
        <link rel="stylesheet" href="css/phpexercise1.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
    </head>
    <body>
    <?php
                    if (isset($_SESSION['username'])) {
                        loggednavbar($connect);
        ?>
        <a href="./phpexercises.php"><img src="./images/arrow_left.png" id="arrow"></a>
        <h1>Installeer PHP & Git</h1>
        <div id="box">
        <h2 id="omschrijving">Wat is PHP</h2>
        <p id="p1">PHP is een scripttaal dat staat voor Hypertext Preprocessor en is een belangrijke taal voor het maken van dynamische webpagina's.
                <br>Grote kans dat je al eens gehoord hebt van PHP. Of je nu een programmeur, systeembeheerder of marketeer bent, eigenlijk kom je vroeg of laat wel eens in aanraking met PHP.</p>
        <h2 id="leerdoelen">Leerdoelen</h2>
        <p id="leerdoelen2">1. Weten wat PHP is<br>2. PHP geinstalleerd hebben op je apparaat<br>3. Git geinstalleerd hebben op je apparaat</p>
        <h2 id="vscode">Download PHP</h2>
        <p id="p2">Voor het gebruiken van PHP moet je XAMPP installeren, volg de stappen hier onder om PHP correct te installeren<br><br><b>Stap 1</b>: Ga naar <a href="https://www.apachefriends.org/download.html" id="a1">https://www.apachefriends.org/download.html</a><br><b>Stap 2</b>: Druk op Download (64 bit) bij de laatste versie<br><b>Stap 3</b>: Druk links onderin op bestand behouden en voer de installatie stappen uit
        <br><b>Stap 4</b>: Druk op het windowslogo op je toetsenbord en ga naar Omgevingsvariabelen<br><b>Stap 5</b>: Druk op nieuw en voeg C:\xampp\php toe aan je PATH<br><b>Stap 6</b>: Ga naar je cmd en typ in php -v om te kijken of PHP juist is geinstalleerd</p>
        </p>
        <h2 id="gebruik">Hoe voer je een PHP script uit</h2>
        <p id="p3">Om een PHP script uit te voeren moet je hem eerst maken. Ga naar je Visual Studio Code, selecteer de programmeertaal PHP en je kan gaan programmeren.<br>Om een PHP script op te slaan ga je naar <b>File</b> -> <b>Save As</b>, dan typ je een naam in hoe je het script wilt noemen en sla je hem op.<br><br>Om een PHP bestand uit te voeren moet je eerst Git installeren, dat kan <a href="https://git-scm.com/downloads" id="alink">hier.</a>
        <br><br>Als je Git hebt geinstalleerd ga je naar de map waar je je PHP script hebt staan, je drukt met rechtermuisknop in de map en je drukt dan op <b>Git Bash here</b><br>Vervolgens typ je "<b>php (naam van het bestand).php</b>"
        </p>
        </div>
        <h6>Hallooo</h6>
    </body>
</html>
<?php 
                    } else {
                        navbarr();
                        ?>
                                <a href="./phpexercises.php"><img src="./images/arrow_left.png" id="arrow"></a>
        <h1>Installeer PHP & Git</h1>
        <div id="box">
        <h2 id="omschrijving">Wat is PHP</h2>
        <p id="p1">PHP is een scripttaal dat staat voor Hypertext Preprocessor en is een belangrijke taal voor het maken van dynamische webpagina's.
                <br>Grote kans dat je al eens gehoord hebt van PHP. Of je nu een programmeur, systeembeheerder of marketeer bent, eigenlijk kom je vroeg of laat wel eens in aanraking met PHP.</p>
        <h2 id="leerdoelen">Leerdoelen</h2>
        <p id="leerdoelen2">1. Weten wat PHP is<br>2. PHP geinstalleerd hebben op je apparaat<br>3. Git geinstalleerd hebben op je apparaat</p>
        <h2 id="vscode">Download PHP</h2>
        <p id="p2">Voor het gebruiken van PHP moet je XAMPP installeren, volg de stappen hier onder om PHP correct te installeren<br><br><b>Stap 1</b>: Ga naar <a href="https://www.apachefriends.org/download.html" id="a1">https://www.apachefriends.org/download.html</a><br><b>Stap 2</b>: Druk op Download (64 bit) bij de laatste versie<br><b>Stap 3</b>: Druk links onderin op bestand behouden en voer de installatie stappen uit
        <br><b>Stap 4</b>: Druk op het windowslogo op je toetsenbord en ga naar Omgevingsvariabelen<br><b>Stap 5</b>: Druk op nieuw en voeg C:\xampp\php toe aan je PATH<br><b>Stap 6</b>: Ga naar je cmd en typ in php -v om te kijken of PHP juist is geinstalleerd</p>
        </p>
        <h2 id="gebruik">Hoe voer je een PHP script uit</h2>
        <p id="p3">Om een PHP script uit te voeren moet je hem eerst maken. Ga naar je Visual Studio Code, selecteer de programmeertaal PHP en je kan gaan programmeren.<br>Om een PHP script op te slaan ga je naar <b>File</b> -> <b>Save As</b>, dan typ je een naam in hoe je het script wilt noemen en sla je hem op.<br><br>Om een PHP bestand uit te voeren moet je eerst Git installeren, dat kan <a href="https://git-scm.com/downloads" id="alink">hier.</a>
        <br><br>Als je Git hebt geinstalleerd ga je naar de map waar je je PHP script hebt staan, je drukt met rechtermuisknop in de map en je drukt dan op <b>Git Bash here</b><br>Vervolgens typ je "<b>php (naam van het bestand).php</b>"
        </p>
        </div>
        <h6>Hallooo</h6>
    </body>
</html>
<?php
                    }
                    ?>
