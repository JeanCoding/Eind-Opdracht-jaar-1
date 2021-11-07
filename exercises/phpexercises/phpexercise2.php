<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="favicon.ico">
        <title>BitClub | PHP Exercise 2</title>
        <link rel="stylesheet" href="css/phpexercise2.css">
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
        <h1>Hallo wereld!</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord1php.rar" id="antwoord2" download="antwoord1php.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Om elke keer jezelf voor te stellen is een hoop werk, programmeurs houden van automatiseren, daarom ga je een script schrijven die jezelf voorstelt die je elke keer weer opnieuw kan laten uitvoeren.</p>
            <div id="stappen">
                <p id="pstappen">1. Gebruik de echo in PHP om "Hallo wereld!" in de terminal te printen</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Weten hoe je de echo in PHP moet gebruiken<br>2. Weten wat de echo in PHP doet</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>echo</b></h3>
                <p id="titletext">De <b>echo</b> in PHP zorgt ervoor dat er een bepaalde data wordt weergegeven in een terminal of op een website.
                    <br><br><a href="https://www.w3schools.com/php/php_echo_print.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/phpvoorbeeld1.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php 
                    } else {
                        navbarr();
                        ?>
                                <a href="./phpexercises.php"><img src="./images/arrow_left.png" id="arrow"></a>
        <h1>Hallo wereld!</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord1php.rar" id="antwoord2" download="antwoord1php.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Om elke keer jezelf voor te stellen is een hoop werk, programmeurs houden van automatiseren, daarom ga je een script schrijven die jezelf voorstelt die je elke keer weer opnieuw kan laten uitvoeren.</p>
            <div id="stappen">
                <p id="pstappen">1. Gebruik de echo in PHP om "Hallo wereld!" in de terminal te printen</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Weten hoe je de echo in PHP moet gebruiken<br>2. Weten wat de echo in PHP doet</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>echo</b></h3>
                <p id="titletext">De <b>echo</b> in PHP zorgt ervoor dat er een bepaalde data wordt weergegeven in een terminal of op een website.
                    <br><br><a href="https://www.w3schools.com/php/php_echo_print.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/phpvoorbeeld1.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    }
                    ?>
