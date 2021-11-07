<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="favicon.ico">
	    <title>BitClub | Javascript Exercise 2</title>
        <link rel="stylesheet" href="css/jsexercise2.css">
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
        <h1>Verander de kleuren</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord2js.rar" id="antwoord2" download="antwoord2js.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Kleuren zijn er op webpagina's mooier te maken, daarom ga je in deze opdracht niet door middel van CSS, maar door middel van javascript de kleur veranderen van de koptekst.</p>
            <div id="stappen">
                <p id="pstappen">1. Verander de kleur van de h1 zonder CSS te gebruiken</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet wat getElementById doet en hoe je het moet gebruiken<br>2. Je kan getElementById en style color gebruiken om een kleur te veranderen van een element</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>getElementById</b></h3>
                <p id="titletext">De <b>getElementById</b> in javascript om informatie van een id te krijgen of te veranderen. Je kan bijvoorbeeld de style van een bepaald element veranderen, wat je normaal met CSS zou doen, een tekstkleur of achtergrondkleur bijvoorbeeld.
                    <br><br><a href="https://www.w3schools.com/jsref/met_document_getelementbyid.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="title2"><b>style color</b></h3>
                <p id="titletext2"><b>style color</b> in javascript zorgt ervoor dat je de kleur van een element verander, of je de kleur van de tekst krijgt als informatie.
                    <br><br><a href="https://www.w3schools.com/jsref/prop_style_color.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/voorbeeldjs2.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    } else {
                        navbarr();
                    ?>
                            <a href="./jsexercises.php"><img src="./images/arrow_left.png" id="arrow"></a>
        <h1>Verander de kleuren</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord2js.rar" id="antwoord2" download="antwoord2js.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Kleuren zijn er op webpagina's mooier te maken, daarom ga je in deze opdracht niet door middel van CSS, maar door middel van javascript de kleur veranderen van de koptekst.</p>
            <div id="stappen">
                <p id="pstappen">1. Verander de kleur van de h1 zonder CSS te gebruiken</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je weet wat getElementById doet en hoe je het moet gebruiken<br>2. Je kan getElementById en style color gebruiken om een kleur te veranderen van een element</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>getElementById</b></h3>
                <p id="titletext">De <b>getElementById</b> in javascript om informatie van een id te krijgen of te veranderen. Je kan bijvoorbeeld de style van een bepaald element veranderen, wat je normaal met CSS zou doen, een tekstkleur of achtergrondkleur bijvoorbeeld.
                    <br><br><a href="https://www.w3schools.com/jsref/met_document_getelementbyid.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="title2"><b>style color</b></h3>
                <p id="titletext2"><b>style color</b> in javascript zorgt ervoor dat je de kleur van een element verander, of je de kleur van de tekst krijgt als informatie.
                    <br><br><a href="https://www.w3schools.com/jsref/prop_style_color.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/voorbeeldjs2.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    }
                    ?>
