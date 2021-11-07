<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/exercise3.css">
        <title>BitClub | HTML & CSS Opdracht 3</title>
        <link rel="icon" href="favicon.ico">
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
        <a href="./exercises.php"><img src="../images/arrow_left.png" id="arrow"></a>
        <h1>Kleurrijk</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord2.rar" id="antwoord2" download="antwoord2.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Op een webpagina kan je eigenlijk bijna altijd wel tekst zien. Met deze opdracht ga je leren hoe je tekst op een pagina krijgt en ook hoe je de tekst een kleur geeft<br>Je gaat ook voor het eerst werken met CSS, kijk helemaal onderaan de pagina voor een uitlegvideo hoe CSS kleuren werken</p>
            <div id="stappen">
                <p id="pstappen">1. Zorg ervoor dat je naam te zien is met de grootste heading<br>2. Zorg ervoor dat je leeftijd er onder staat in een paragraaf</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Het verschil kennen tussen een heading en een paragraph<br>2. Je kunt een heading en een paragraph maken<br>3. Je kunt headings en paragraphs kleuren geven</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="heading"><b>heading</b></h3>
                <p id="headingtext">De heading tags worden gebruikt om HTML-koppen aan te geven.
                    <b>h1</b> definieert de belangrijkste kop. <b>h6</b> definieert de minst belangrijke kop.<br><br><a href="https://www.w3schools.com/tags/tag_hn.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="paragraph"><b>paragraph</b></h3>
                <p id="paragraphtext">Het <b>p</b> element geeft een alinea aan, een stuk tekst. Het <b>p</b> element gebruik je als je een groot stuk tekst wilt neerzetten op je webpagina wat niet al te groot is.<br><br><a href="https://www.w3schools.com/html/html_paragraphs.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken3">
                <h3 id="color"><b>color</b></h3>
                <p id="colortext">Het <b>color</b> attribuut in CSS gebruik je als je de kleur van een woord, of een heel stuk tekst wilt veranderen van kleur.<br><br><a href="https://www.w3schools.com/cssref/pr_text_color.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="video">Video</h2>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/UO0ZPL8yMpU" frameborder="0" gesture="media" allow="encrypted-media" allow="fullscreen" id="videoframe"></iframe>
            </iframe>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="../images/voorbeeldhtml3.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php 
                    } else {
                        navbarr();
                        ?>
<a href="./exercises.php"><img src="../images/arrow_left.png" id="arrow"></a>
        <h1>Kleurrijk</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord2.rar" id="antwoord2" download="antwoord2.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Op een webpagina kan je eigenlijk bijna altijd wel tekst zien. Met deze opdracht ga je leren hoe je tekst op een pagina krijgt en ook hoe je de tekst een kleur geeft<br>Je gaat ook voor het eerst werken met CSS, kijk helemaal onderaan de pagina voor een uitlegvideo hoe CSS kleuren werken</p>
            <div id="stappen">
                <p id="pstappen">1. Zorg ervoor dat je naam te zien is met de grootste heading<br>2. Zorg ervoor dat je leeftijd er onder staat in een paragraaf</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Het verschil kennen tussen een heading en een paragraph<br>2. Je kunt een heading en een paragraph maken<br>3. Je kunt headings en paragraphs kleuren geven</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="heading"><b>heading</b></h3>
                <p id="headingtext">De heading tags worden gebruikt om HTML-koppen aan te geven.
                    <b>h1</b> definieert de belangrijkste kop. <b>h6</b> definieert de minst belangrijke kop.<br><br><a href="https://www.w3schools.com/tags/tag_hn.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="paragraph"><b>paragraph</b></h3>
                <p id="paragraphtext">Het <b>p</b> element geeft een alinea aan, een stuk tekst. Het <b>p</b> element gebruik je als je een groot stuk tekst wilt neerzetten op je webpagina wat niet al te groot is.<br><br><a href="https://www.w3schools.com/html/html_paragraphs.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken3">
                <h3 id="color"><b>color</b></h3>
                <p id="colortext">Het <b>color</b> attribuut in CSS gebruik je als je de kleur van een woord, of een heel stuk tekst wilt veranderen van kleur.<br><br><a href="https://www.w3schools.com/cssref/pr_text_color.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="video">Video</h2>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/UO0ZPL8yMpU" frameborder="0" gesture="media" allow="encrypted-media" allow="fullscreen" id="videoframe"></iframe>
            </iframe>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="../images/voorbeeldhtml3.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    }
                    ?>