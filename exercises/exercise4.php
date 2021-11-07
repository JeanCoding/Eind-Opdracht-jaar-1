<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/exercise4.css">
        <title>BitClub | HTML & CSS Opdracht 4</title>
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
        <h1>Laat eens een foto zien!</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord3.rar" id="antwoord2" download="antwoord3.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Je website vertelt nu nog niet zoveel over jezelf. Vandaar ga je al je hobby's op de website zetten met een foto van elke hobby erbij. Om het niet zo standaard te laten verander je ook de achtergrond kleur van de webpagina maar de achtergrond waar de naam van je hobby's staan moeten wel een andere kleur hebben.</p>
            <div id="stappen">
                <p id="pstappen">1. Verander de achtergrond kleur van de website<br>2. Zet al je hobby's neer en voeg een foto van elke hobby toe<br>3. Verander de achtergrondkleur waar al je hobby's staan</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je kan de achtergrondkleur van een webpagina veranderen<br>2. Je kunt een foto toevoegen op een webpagina<br>3. Je weet hoe je een unordered list maakt</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="img"><b>img</b></h3>
                <p id="imgtext">De <b>img</b> tags worden gebruikt om een foto op je webpagina te zetten. De <b>img</b> tag heeft twee vereisten attributen, <b>src</b> en <b>alt</b>. Zonder één van deze twee zal de <b>img</b> tag niet werken.
                    <br><br><a href="https://www.w3schools.com/tags/tag_img.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="ul"><b>ul</b></h3>
                <p id="ultext">De <b>ul</b> tag maakt een unordered list aan, gebruik deze samen met de <b>li</b> tags en je krijgt een unordered list.<br><br><a href="https://www.w3schools.com/tags/tag_ul.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken3">
                <h3 id="background-color"><b>background-color</b></h3>
                <p id="background-colortext">Het <b>background-color</b> attribuut in CSS gebruik je om een achtergrond kleur aan een bepaald element te geven, dit kan van één woord zijn tot een hele webpagina.<br><br><a href="https://www.w3schools.com/cssref/pr_background-color.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="video">Video</h2>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/JS157Id0Exw" frameborder="0" gesture="media" allow="encrypted-media" allow="fullscreen" id="videoframe"></iframe>
            </iframe>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="../images/voorbeeldhtml4.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    } else {
                        navbarr();
                        ?>
                                <a href="./exercises.php"><img src="../images/arrow_left.png" id="arrow"></a>
        <h1>Laat eens een foto zien!</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord3.rar" id="antwoord2" download="antwoord3.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Je website vertelt nu nog niet zoveel over jezelf. Vandaar ga je al je hobby's op de website zetten met een foto van elke hobby erbij. Om het niet zo standaard te laten verander je ook de achtergrond kleur van de webpagina maar de achtergrond waar de naam van je hobby's staan moeten wel een andere kleur hebben.</p>
            <div id="stappen">
                <p id="pstappen">1. Verander de achtergrond kleur van de website<br>2. Zet al je hobby's neer en voeg een foto van elke hobby toe<br>3. Verander de achtergrondkleur waar al je hobby's staan</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Je kan de achtergrondkleur van een webpagina veranderen<br>2. Je kunt een foto toevoegen op een webpagina<br>3. Je weet hoe je een unordered list maakt</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="img"><b>img</b></h3>
                <p id="imgtext">De <b>img</b> tags worden gebruikt om een foto op je webpagina te zetten. De <b>img</b> tag heeft twee vereisten attributen, <b>src</b> en <b>alt</b>. Zonder één van deze twee zal de <b>img</b> tag niet werken.
                    <br><br><a href="https://www.w3schools.com/tags/tag_img.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="ul"><b>ul</b></h3>
                <p id="ultext">De <b>ul</b> tag maakt een unordered list aan, gebruik deze samen met de <b>li</b> tags en je krijgt een unordered list.<br><br><a href="https://www.w3schools.com/tags/tag_ul.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken3">
                <h3 id="background-color"><b>background-color</b></h3>
                <p id="background-colortext">Het <b>background-color</b> attribuut in CSS gebruik je om een achtergrond kleur aan een bepaald element te geven, dit kan van één woord zijn tot een hele webpagina.<br><br><a href="https://www.w3schools.com/cssref/pr_background-color.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="video">Video</h2>
            <iframe width="420" height="315" src="https://www.youtube.com/embed/JS157Id0Exw" frameborder="0" gesture="media" allow="encrypted-media" allow="fullscreen" id="videoframe"></iframe>
            </iframe>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="../images/voorbeeldhtml4.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    }
                    ?>

                    