<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="favicon.ico">
	    <title>BitClub | Javascript Exercise 3</title>
        <link rel="stylesheet" href="css/jsexercises3.css">
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
        <h1>Druk op de knop</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord3js.rar" id="antwoord2" download="antwoord3js.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Kleuren op een website zijn mooi, maar je kan er ook voor zorgen dat er pas kleuren komen als je op een knop drukt en daar gaan we in deze opdracht mee aan de slag.</p>
            <div id="stappen">
                <p id="pstappen">1. Laat de kleur van een h1 veranderen als je op een button drukt</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet hoe je een onclick event moet gebruiken in HTML.<br>2. Je weet hoe je een onclick button linkt aan javascript.</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>onclick Event</b></h3>
                <p id="titletext">Het <b>onclick Event</b> zorgt ervoor dat je een javascript functie aan een HTML button kan koppelen. Als je op de knop drukt (onclick), wordt de functie uitgevoerd.
                    <br><br><a href="https://www.w3schools.com/jsref/event_onclick.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <div id="voorbeeld">
                <video muted autoplay>
                <source src="images/voorbeeldjs4.mp4">
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
        <h1>Druk op de knop</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord3js.rar" id="antwoord2" download="antwoord3js.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Kleuren op een website zijn mooi, maar je kan er ook voor zorgen dat er pas kleuren komen als je op een knop drukt en daar gaan we in deze opdracht mee aan de slag.</p>
            <div id="stappen">
                <p id="pstappen">1. Laat de kleur van een h1 veranderen als je op een button drukt</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet hoe je een onclick event moet gebruiken in HTML.<br>2. Je weet hoe je een onclick button linkt aan javascript.</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>onclick Event</b></h3>
                <p id="titletext">Het <b>onclick Event</b> zorgt ervoor dat je een javascript functie aan een HTML button kan koppelen. Als je op de knop drukt (onclick), wordt de functie uitgevoerd.
                    <br><br><a href="https://www.w3schools.com/jsref/event_onclick.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <div id="voorbeeld">
                <video muted autoplay>
                <source src="images/voorbeeldjs4.mp4">
            </video>
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    }
                    ?>