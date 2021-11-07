<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="favicon.ico">
        <title>BitClub | PHP Exercise 3</title>
        <link rel="stylesheet" href="css/phpexercise3.css">
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
        <h1>Sla het op</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord2.php" id="antwoord2" download="antwoord2.php">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Het is saai als je iets elke keer opnieuw handmatig moet laten weergeven in een terminal of op een website, daarom ga je in deze opdracht gebruik maken van variabelen. Deze zorgen ervoor dat je een waarde maar 1x hoeft op te slaan en daarna moet je alleen maar de variabele laten weer te geven.</p>
            <div id="stappen">
                <p id="pstappen">1. Zet je naam in een variabele en zorg ervoor dat de variabele 5x wordt weergegeven in de terminal</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Weten wat een variabele is<br>2. Weten hoe je iets in een variabele opslaat</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>variabelen</b></h3>
                <p id="titletext">PHP <b>variabelen</b> zorgen ervoor dat je bepaalde data kan opslaan in een soort van container. In een variabele kan je een string, integer, boolean of een float opslaan.
                    <br><br><a href="https://www.w3schools.com/php/php_variables.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="title2"><b>newline</b></h3>
                <p id="titletext2">De <b>newline</b> in PHP zorgt ervoor dat je volgende lijn code, op de volgende regels in een terminal of op een webpagina komt te staan. Bijvoorbeeld, als je twee echo's onder elkaar hebt in php, komen ze naast elkaar. Met een newline ertussen komt de tweede echo eronder.
                    <br><br><a href="https://seegatesite.com/how-to-create-a-line-break-php/" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/voorbeeldphp.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php 
                    } else {
                        navbarr();
                        ?>
                               <a href="./phpexercises.php"><img src="./images/arrow_left.png" id="arrow"></a>
        <h1>Sla het op</h1>
        <div id="box">
            <button id="antwoord" type="submit"><a href="antwoorden/antwoord2.php" id="antwoord2" download="antwoord2.php">Antwoord</a></button>
            <h2 id="omschrijving">Omschrijving</h2>
            <p id="p1">Het is saai als je iets elke keer opnieuw handmatig moet laten weergeven in een terminal of op een website, daarom ga je in deze opdracht gebruik maken van variabelen. Deze zorgen ervoor dat je een waarde maar 1x hoeft op te slaan en daarna moet je alleen maar de variabele laten weer te geven.</p>
            <div id="stappen">
                <p id="pstappen">1. Zet je naam in een variabele en zorg ervoor dat de variabele 5x wordt weergegeven in de terminal</p>
            </div>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelenp">1. Weten wat een variabele is<br>2. Weten hoe je iets in een variabele opslaat</p>
            <h2 id="techniekenh2">Nieuwe technieken</h2>
            <div id="nieuwetechnieken">
                <h3 id="title"><b>variabelen</b></h3>
                <p id="titletext">PHP <b>variabelen</b> zorgen ervoor dat je bepaalde data kan opslaan in een soort van container. In een variabele kan je een string, integer, boolean of een float opslaan.
                    <br><br><a href="https://www.w3schools.com/php/php_variables.asp" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <div id="nieuwetechnieken2">
                <h3 id="title2"><b>newline</b></h3>
                <p id="titletext2">De <b>newline</b> in PHP zorgt ervoor dat je volgende lijn code, op de volgende regels in een terminal of op een webpagina komt te staan. Bijvoorbeeld, als je twee echo's onder elkaar hebt in php, komen ze naast elkaar. Met een newline ertussen komt de tweede echo eronder.
                    <br><br><a href="https://seegatesite.com/how-to-create-a-line-break-php/" target="about_blank" id="alink">Lees verder!</a></p>
            </div>
            <h2 id="uitkomst">Verwachte uitkomst</h2>
            <img src="./images/voorbeeldphp.png" id="voorbeeld">
        </div>
        <h6>Test</h6>
    </body>
</html>
<?php
                    }
                    ?>
                    

