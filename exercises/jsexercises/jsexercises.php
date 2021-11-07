<?php
include 'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
	    <link rel="icon" href="favicon.ico">
	    <title>BitClub | Javascript Exercises</title>
        <link rel="stylesheet" href="css/jsexercises.css">
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
        <h1>Exercises</h1>
        <h4 id="level1h4">Level 3/3: Javascript!</h4>
        <img src="images/unlocked.png" id="unlocked">
        <div id="box">
            <button id="allesklaar" onclick="allesKlaar()">Alles klaar</button>
            <div id="opdracht1html">
                <img src="images/praktijk.png" id="theorie">
                <h6 id="kop1">Console</h6>
                <p id="tekst1">Praktijk</p>
                <a href="./jsexercise1.php"><button id="button1">Doorgaan</button></a>
                <button onclick="klaar()" id="klaar">Klaar</button>
                <img src="images/completed.png" id="completed">
            </div>
            <div id="opdracht2html">
                <img src="images/praktijk2.png" id="praktijk">
                <h6 id="kop2">Verander de kleuren</h6>
                <p id="tekst2">Praktijk</p>
                <img src="images/locked.png" id="locked">
                <a href="./jsexercise2.php"><button id="button2">Doorgaan</button></a>
                <button onclick="klaar2()" id="klaar2">Klaar</button>
                <img src="images/completed.png" id="completed2">
            </div>
            <div id="opdracht3html">
                <img src="images/praktijk2.png" id="praktijk2">
                <h6 id="kop3">Druk op de knop</h6>
                <p id="tekst3">Praktijk</p>
                <img src="images/locked.png" id="locked2">
                <a href="./jsexercise3.php"><button id="button3">Doorgaan</button></a>
                <button onclick="klaar3()" id="klaar3">Klaar</button>
                <img src="images/completed.png" id="completed3">
            </div>
            <div id="opdracht4html">
                <img src="images/praktijk2.png" id="praktijk3">
                <h6 id="kop4">Opslaan met variabelen</h6>
                <p id="tekst4">Praktijk</p>
                <img src="images/locked.png" id="locked3">
                <a href="./jsexercise4.php"><button id="button4">Doorgaan</button></a>
                <button onclick="klaar4()" id="klaar4">Klaar</button>
                <img src="images/completed.png" id="completed4">
                <button id="php" onclick="naarPHP();"><a href="../.././home.php">Je bent klaar met alle opdrachten, druk hier om terug te gaan naar het universum!</button></a>
            </div>
        <script src="js/jsknoppen.js"></script>
    </body>
</html>
<?php
                    } else {
                        navbarr();
                        ?>        <h1>Exercises</h1>
                        <h4 id="level1h4">Level 3/3: Javascript!</h4>
                        <img src="./images/unlocked.png" id="unlocked">
                        <div id="box">
                            <button id="allesklaar" onclick="allesKlaar()">Alles klaar</button>
                            <div id="opdracht1html">
                                <img src="images/praktijk.png" id="theorie">
                                <h6 id="kop1">Console</h6>
                                <p id="tekst1">Praktijk</p>
                                <a href="./jsexercise1.php"><button id="button1">Doorgaan</button></a>
                                <button onclick="klaar()" id="klaar">Klaar</button>
                                <img src="images/completed.png" id="completed">
                            </div>
                            <div id="opdracht2html">
                                <img src="images/praktijk2.png" id="praktijk">
                                <h6 id="kop2">Verander de kleuren</h6>
                                <p id="tekst2">Praktijk</p>
                                <img src="images/locked.png" id="locked">
                                <a href="./jsexercise2.php"><button id="button2">Doorgaan</button></a>
                                <button onclick="klaar2()" id="klaar2">Klaar</button>
                                <img src="images/completed.png" id="completed2">
                            </div>
                            <div id="opdracht3html">
                                <img src="images/praktijk2.png" id="praktijk2">
                                <h6 id="kop3">Druk op de knop</h6>
                                <p id="tekst3">Praktijk</p>
                                <img src="images/locked.png" id="locked2">
                                <a href="./jsexercise3.php"><button id="button3">Doorgaan</button></a>
                                <button onclick="klaar3()" id="klaar3">Klaar</button>
                                <img src="images/completed.png" id="completed3">
                            </div>
                            <div id="opdracht4html">
                                <img src="images/praktijk2.png" id="praktijk3">
                                <h6 id="kop4">Opslaan met variabelen</h6>
                                <p id="tekst4">Praktijk</p>
                                <img src="images/locked.png" id="locked3">
                                <a href="./jsexercise4.php"><button id="button4">Doorgaan</button></a>
                                <button onclick="klaar4()" id="klaar4">Klaar</button>
                                <img src="images/completed.png" id="completed4">
                                <button id="php" onclick="naarPHP();"><a href="../.././home.php">Je bent klaar met alle opdrachten, druk hier om terug te gaan naar het universum!</button></a>
                            </div>
                        <script src="js/jsknoppen.js"></script>
                    </body>
                </html>
                <?php
                    }
                    ?>

                    