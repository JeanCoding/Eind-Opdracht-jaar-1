<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="favicon.ico">
	    <title>BitClub | Javascript Exercise 1</title>
        <link rel="stylesheet" href="css/jsexercise1.css">
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
        <a href="./jsexercises.php"><img src="./images/arrow_left.png" id="arrow"></a>
        <h1>Console</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord1js.rar" id="antwoord2" download="antwoord1js.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Een webpagina console is een makkelijke plek om je javascript code te schrijven en laten weergeven, dit schrijven in de webpagina console heeft alleen nog niet zoveel invloed op de pagina zelf. Maar gelukkig kan je wel vanaf een webpagina javascript code uitvoeren en in een webpagina console laten weergeven.</p>
            <div id="stappen">
                <p id="pstappen">1. Zorg ervoor dat er "Hallo wereld!" in de console wordt weergegeven!</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet wat een console is van een website<br>2. Je weet hoe de functie console.log werkt in javascript</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>console.log</b></h3>
                <p id="titletext">Met <b>console.log</b> in javascript zorg je ervoor dat er een bepaald bericht wordt weergegeven in de console van de webpagina.
                    <br><br><a href="https://www.w3schools.com/jsref/met_console_log.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/voorbeeldjs1.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    } else {
                        navbarr();
                        ?>
                                <a href="./jsexercises.php"><img src="./images/arrow_left.png" id="arrow"></a>
        <h1>Console</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord1js.rar" id="antwoord2" download="antwoord1js.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Een webpagina console is een makkelijke plek om je javascript code te schrijven en laten weergeven, dit schrijven in de webpagina console heeft alleen nog niet zoveel invloed op de pagina zelf. Maar gelukkig kan je wel vanaf een webpagina javascript code uitvoeren en in een webpagina console laten weergeven.</p>
            <div id="stappen">
                <p id="pstappen">1. Zorg ervoor dat er "Hallo wereld!" in de console wordt weergegeven!</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet wat een console is van een website<br>2. Je weet hoe de functie console.log werkt in javascript</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>console.log</b></h3>
                <p id="titletext">Met <b>console.log</b> in javascript zorg je ervoor dat er een bepaald bericht wordt weergegeven in de console van de webpagina.
                    <br><br><a href="https://www.w3schools.com/jsref/met_console_log.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/voorbeeldjs1.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    }
                    ?>