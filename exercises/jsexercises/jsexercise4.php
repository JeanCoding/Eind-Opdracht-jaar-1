<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="favicon.ico">
	    <title>BitClub | Javascript Exercise 4</title>
        <link rel="stylesheet" href="css/jsexercise4.css">
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
        <h1>Opslaan met variabelen</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord4js.rar" id="antwoord2" download="antwoord4js.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Je kan data van een webpagina opslaan door middel van javascript. Bijvoorbeeld als je op de knop drukt, wordt de input kleur naar keuze opgeslagen en daarna uitgevoerd op de website.</p>
            <div id="stappen">
                <p id="pstappen">1. Je zorgt ervoor dat de gebruiker een eigen input kleur achter kan laten<br>2. Je slaat de input van de gebruiker op en zorgt dat als je op de "Save Changes" knop drukt, je de kleur verandert.</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet hoe je data moet opslaan door middel van variabelen<br>2. Je weet hoe je opgeslagen data van een variabele krijgt</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="img"><b>variabelen</b></h3>
                <p id="imgtext"><b>variabelen</b> zorgen ervoor dat je data waardes kan opslaan in je javascript.
                    <br><br><a href="https://www.w3schools.com/js/js_variables.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="ul"><b>input type color</b></h3>
                <p id="ultext">Het <b>input type color</b> in javascript zorgt ervoor dat je een eigen kleur kan kiezen in een input veld.<br><br><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/color" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="video">Video</h2>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/edlFjlzxkSI" frameborder="0" gesture="media" allow="encrypted-media" allow="fullscreen" id="videoframe"></iframe>
            </iframe>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <div id="voorbeeld">
                <video muted autoplay>
                <source src="images/voorbeeldjs5.mp4">
            </video>
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    } else {
                        navbarr();
                        ?>
                                <a href="./jsexercises.php"><img src="./images/arrow_left.png" id="arrow"></a>
        <h1>Opslaan met variabelen</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord4js.rar" id="antwoord2" download="antwoord4js.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Je kan data van een webpagina opslaan door middel van javascript. Bijvoorbeeld als je op de knop drukt, wordt de input kleur naar keuze opgeslagen en daarna uitgevoerd op de website.</p>
            <div id="stappen">
                <p id="pstappen">1. Je zorgt ervoor dat de gebruiker een eigen input kleur achter kan laten<br>2. Je slaat de input van de gebruiker op en zorgt dat als je op de "Save Changes" knop drukt, je de kleur verandert.</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet hoe je data moet opslaan door middel van variabelen<br>2. Je weet hoe je opgeslagen data van een variabele krijgt</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="img"><b>variabelen</b></h3>
                <p id="imgtext"><b>variabelen</b> zorgen ervoor dat je data waardes kan opslaan in je javascript.
                    <br><br><a href="https://www.w3schools.com/js/js_variables.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="ul"><b>input type color</b></h3>
                <p id="ultext">Het <b>input type color</b> in javascript zorgt ervoor dat je een eigen kleur kan kiezen in een input veld.<br><br><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input/color" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="video">Video</h2>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/edlFjlzxkSI" frameborder="0" gesture="media" allow="encrypted-media" allow="fullscreen" id="videoframe"></iframe>
            </iframe>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <div id="voorbeeld">
                <video muted autoplay>
                <source src="images/voorbeeldjs5.mp4">
            </video>
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    }
                    ?>
