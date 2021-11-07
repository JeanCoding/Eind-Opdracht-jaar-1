<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/exercise1.css">
        <title>BitClub | HTML & CSS Opdracht 1</title>
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
        <h1>Waar moet ik beginnen?</h1>
        <div id="box">
            <h2 id="omschrijving">Hoe werken de opdrachten</h2>
            <p id="p1">Welkom bij de theorie van de opdrachten. Deze opdrachten zijn bedoeld om je een inzicht te geven hoe de opdrachten werken bij de Bit Academy. Je maakt ze zelfstandig en op je eigen tempo. De theorie die wordt gegeven bij de opdrachten bij de Bit Academy geeft je altijd informatie over specifieke onderwerpen waarover je daarna opdrachten zult gaan maken.<br>Voor de oefenopdrachten die je hier kan maken moet je weten hoe je een HTML bestand aanmaakt, een CSS bestand aanmaakt en heb je een goede code editor nodig zoals Visual Studio Code. HTML staat voor HyperText Markup Language</p>
            <h2 id="leerdoelen">Leerdoelen</h2>
            <p id="leerdoelen2">1. Visual Studio Code geinstalleerd hebben<br>2. Weten hoe je een HTML bestand maakt</p>
            <h2 id="vscode">Download Visual Studio Code</h2>
            <p id="p2"><b>Stap 1</b>: Ga naar <a href="https://code.visualstudio.com/" id="a1">https://code.visualstudio.com/</a><br><b>Stap 2</b>: Druk op Download for Windows<br><b>Stap 3</b>: Druk links onderin op bestand behouden en open je Visual Studio Code.</p>
            <h2 id="gebruik">Hoe gebruik je Visual Studio Code</h2>
            <p id="p3">Nu je Visual Studio Code op je laptop hebt kan je een html bestand aanmaken.
                Open je Visual Studio Code, ga naar <b>File</b> en druk op <b>New File</b>.
                Selecteer rechtsonder waar <b>Plain Text</b> staat de programmeertaal waarin je wilt programmeren, bijvoorbeeld <b>HTML</b>.
                Nu kan je beginnen met programmeren en als je klaar bent druk je op <b>File -> Save As</b> en dan selecteer je de locatie waar je de code wilt opslaan en als naam gebruik je <b>index.html</b>.
                Om HTML te openen moet je het bestand openen met je browser, om eraan verder te werken open hem je met Visual Studio Code.<br><br>Als je je HTML hebt opgeslagen in een map zou het er zo moeten uitzien:</p>
            <img src="../images/voorbeeldhtml.png" id="voorbeeldimg1">
        </div>
        <h6>Hallooo</h6>
    </body>
</html>
<?php
                    } else {
                        navbarr();
                        ?>         <a href="./exercises.php"><img src="../images/arrow_left.png" id="arrow"></a>
                        <h1>Waar moet ik beginnen?</h1>
                        <div id="box">
                            <h2 id="omschrijving">Hoe werken de opdrachten</h2>
                            <p id="p1">Welkom bij de theorie van de opdrachten. Deze opdrachten zijn bedoeld om je een inzicht te geven hoe de opdrachten werken bij de Bit Academy. Je maakt ze zelfstandig en op je eigen tempo. De theorie die wordt gegeven bij de opdrachten bij de Bit Academy geeft je altijd informatie over specifieke onderwerpen waarover je daarna opdrachten zult gaan maken.<br>Voor de oefenopdrachten die je hier kan maken moet je weten hoe je een HTML bestand aanmaakt, een CSS bestand aanmaakt en heb je een goede code editor nodig zoals Visual Studio Code.</p>
                            <h2 id="leerdoelen">Leerdoelen</h2>
                            <p id="leerdoelen2">1. Visual Studio Code geinstalleerd hebben<br>2. Weten hoe je een HTML bestand maakt</p>
                            <h2 id="vscode">Download Visual Studio Code</h2>
                            <p id="p2"><b>Stap 1</b>: Ga naar <a href="https://code.visualstudio.com/" id="a1">https://code.visualstudio.com/</a><br><b>Stap 2</b>: Druk op Download for Windows<br><b>Stap 3</b>: Druk links onderin op bestand behouden en open je Visual Studio Code.</p>
                            <h2 id="gebruik">Hoe gebruik je Visual Studio Code</h2>
                            <p id="p3">Nu je Visual Studio Code op je laptop hebt kan je een html bestand aanmaken.
                                Open je Visual Studio Code, ga naar <b>File</b> en druk op <b>New File</b>.
                                Selecteer rechtsonder waar <b>Plain Text</b> staat de programmeertaal waarin je wilt programmeren, bijvoorbeeld <b>HTML</b>.
                                Nu kan je beginnen met programmeren en als je klaar bent druk je op <b>File -> Save As</b> en dan selecteer je de locatie waar je de code wilt opslaan en als naam gebruik je <b>index.html</b>.
                                Om HTML te openen moet je het bestand openen met je browser, om eraan verder te werken open hem je met Visual Studio Code.<br><br>Als je je HTML hebt opgeslagen in een map zou het er zo moeten uitzien:</p>
                            <img src="../images/voorbeeldhtml.png" id="voorbeeldimg1">
                        </div>
                        <h6>Hallooo</h6>
                    </body>
                </html>
                <?php
                    }
                    ?>