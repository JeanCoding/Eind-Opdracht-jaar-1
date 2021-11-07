<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BitClub | HTML & CSS Opdracht 2</title>
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="css/exercise2.css">
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
        <h1>Een titel zegt alles</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord1.rar" id="antwoord2" download="antwoord1.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Een goede website is niks zonder een goede titel. Daarom is nu aan jou de taak om de titel van je eerste webpagina in te stellen.</p>
            <div id="stappen">
                <p id="pstappen">1. Schrijf een stuk code dat je webpagina een titel geeft</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Weten hoe je je webpagina een titel geeft<br>2. Weten hoe je je HTML bestand indeelt met de vereiste tags</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>title</b></h3>
                <p id="titletext">De <b>title</b> tag definieert de titel van het document. De titel moet alleen tekst bevatten en wordt weergegeven in de titelbalk van de browser of op het paginatabblad.
                    De <b>title</b> tag is vereist in HTML-documenten!<br><br><a href="https://www.w3schools.com/tags/tag_title.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="../images/voorbeeldhtml2.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    } else {
                        navbarr();
                    
                    ?>
                            <a href="./exercises.php"><img src="../images/arrow_left.png" id="arrow"></a>
        <h1>Een titel zegt alles</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord1.rar" id="antwoord2" download="antwoord1.rar">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Een goede website is niks zonder een goede titel. Daarom is nu aan jou de taak om de titel van je eerste webpagina in te stellen.</p>
            <div id="stappen">
                <p id="pstappen">1. Schrijf een stuk code dat je webpagina een titel geeft</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Weten hoe je je webpagina een titel geeft<br>2. Weten hoe je je HTML bestand indeelt met de vereiste tags</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>title</b></h3>
                <p id="titletext">De <b>title</b> tag definieert de titel van het document. De titel moet alleen tekst bevatten en wordt weergegeven in de titelbalk van de browser of op het paginatabblad.
                    De <b>title</b> tag is vereist in HTML-documenten!<br><br><a href="https://www.w3schools.com/tags/tag_title.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="../images/voorbeeldhtml2.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
}
?>