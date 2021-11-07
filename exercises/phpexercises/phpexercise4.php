<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="favicon.ico">
        <title>BitClub | PHP Exercise 4</title>
        <link rel="stylesheet" href="css/phpexercise4.css">
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
        <h1>Rekenmachine</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord3php.rar" id="antwoord2" download="antwoord3php.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Als je snel een moeilijke som wilt uitrekenen, kan je het zelf proberen, of heel makkelijk met een rekenmachine. Een rekenmachine zorgt ervoor dat je zelf niet lang iets hoeft te berekenen en dat je zeker weet dat het klopt. Daarom ga je in deze opdracht je eigen rekenmachine maken, die twee getallen bij elkaar kan optellen, kan aftrekken, kan vermenigvuldigen en delen door elkaar.</p>
            <div id="stappen">
                <p id="pstappen">1. Vraag de gebruiker wat hij wilt doen (+, -, *, /)<br>2. Maak gebruik van if statements die vragen om een eerste getal, tweede getal en je dan de uitkomst geven met de optie die de gebruiker heeft gekozen</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet wat PHP Operators zijn en hoe ze werken<br>2. Je kan omgaan met if statements in PHP</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="img"><b>PHP Operators</b></h3>
                <p id="imgtext">PHP <b>Operators</b> zorgen ervoor dat je variabelen en waardes kan optellen, aftrekken, vermenigvuldigen en delen door elkaar. PHP <b>Operators</b> gebruik je als je een som wilt uitrekenen in PHP.
                    <br><br><a href="https://www.w3schools.com/php/php_operators.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="ul"><b>if statement</b></h3>
                <p id="ultext">Het <b>if stamenent</b> in PHP zorgt ervoor dat als er aan een bepaalde conditie word gedaan, er een stuk code wordt uitgevoerd. Bijvoorbeeld als een variabele groter of kleiner dan een bepaalde waarde is, wordt er een stuk code uitgevoerd.<br><br><a href="https://www.php.net/manual/en/control-structures.if.php" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken3">
                <h3 id="ul2"><b>readline</b></h3>
                <p id="ultext2"><b>readline</b> laat je de input van een gebruiker lezen, opslaan met een variabele zodat je hem later kan gebruiken om bijvoorbeeld een som uit te rekenen. Bijvoorbeeld, de gebruiker geeft een getal en jij kan de input van de readline echo'en.<br><br><a href="https://www.geeksforgeeks.org/how-to-read-user-or-console-input-in-php/" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="video">Video</h2>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/dx7dO-pkGKg" frameborder="0" gesture="media" allow="encrypted-media" allow="fullscreen" id="videoframe"></iframe>
            </iframe>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/voorbeeldphp2.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    } else {
                        navbarr();
                        ?>
                                <a href="./phpexercises.php"><img src="./images/arrow_left.png" id="arrow"></a>
        <h1>Rekenmachine</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord3php.rar" id="antwoord2" download="antwoord3php.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Als je snel een moeilijke som wilt uitrekenen, kan je het zelf proberen, of heel makkelijk met een rekenmachine. Een rekenmachine zorgt ervoor dat je zelf niet lang iets hoeft te berekenen en dat je zeker weet dat het klopt. Daarom ga je in deze opdracht je eigen rekenmachine maken, die twee getallen bij elkaar kan optellen, kan aftrekken, kan vermenigvuldigen en delen door elkaar.</p>
            <div id="stappen">
                <p id="pstappen">1. Vraag de gebruiker wat hij wilt doen (+, -, *, /)<br>2. Maak gebruik van if statements die vragen om een eerste getal, tweede getal en je dan de uitkomst geven met de optie die de gebruiker heeft gekozen</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet wat PHP Operators zijn en hoe ze werken<br>2. Je kan omgaan met if statements in PHP</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="img"><b>PHP Operators</b></h3>
                <p id="imgtext">PHP <b>Operators</b> zorgen ervoor dat je variabelen en waardes kan optellen, aftrekken, vermenigvuldigen en delen door elkaar. PHP <b>Operators</b> gebruik je als je een som wilt uitrekenen in PHP.
                    <br><br><a href="https://www.w3schools.com/php/php_operators.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="ul"><b>if statement</b></h3>
                <p id="ultext">Het <b>if stamenent</b> in PHP zorgt ervoor dat als er aan een bepaalde conditie word gedaan, er een stuk code wordt uitgevoerd. Bijvoorbeeld als een variabele groter of kleiner dan een bepaalde waarde is, wordt er een stuk code uitgevoerd.<br><br><a href="https://www.php.net/manual/en/control-structures.if.php" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken3">
                <h3 id="ul2"><b>readline</b></h3>
                <p id="ultext2"><b>readline</b> laat je de input van een gebruiker lezen, opslaan met een variabele zodat je hem later kan gebruiken om bijvoorbeeld een som uit te rekenen. Bijvoorbeeld, de gebruiker geeft een getal en jij kan de input van de readline echo'en.<br><br><a href="https://www.geeksforgeeks.org/how-to-read-user-or-console-input-in-php/" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="video">Video</h2>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/dx7dO-pkGKg" frameborder="0" gesture="media" allow="encrypted-media" allow="fullscreen" id="videoframe"></iframe>
            </iframe>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/voorbeeldphp2.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    }
                    ?>
                    