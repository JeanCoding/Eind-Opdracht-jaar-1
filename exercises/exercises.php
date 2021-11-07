<?php
include 'navbar.php';
include 'dbhA.php';
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/exercises.css">
        <link rel="icon" href="favicon.ico">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title>BitClub | Exercises</title>
    </head>
    <body>
        <?php
                    if (isset($_SESSION['username'])) {
                        loggednavbar($connect);
        ?>
        <h1>Exercises</h1>
        <h4 id="level1h4">Level 1/3: HTML & CSS!</h4>
        <img src="../images/unlocked.png" id="unlocked">
        <div id="box">
            <button id="allesklaar" onclick="allesKlaar()">Alles klaar</button>
            <div id="opdracht1html">
                <img src="../images/theorie.png" id="theorie">
                <h6 id="kop1">Waar moet ik beginnen?</h6>
                <p id="tekst1">Theorie</p>
                <a href="./exercise1.php"><button id="button1">Doorgaan</button></a>
                <button onclick="klaar()" id="klaar">Klaar</button>
                <img src="../images/completed.png" id="completed">
            </div>
            <div id="opdracht2html">
                <img src="../images/praktijk2.png" id="praktijk">
                <h6 id="kop2">Een titel zegt alles</h6>
                <p id="tekst2">Praktijk</p>
                <img src="../images/locked.png" id="locked">
                <a href="./exercise2.php"><button id="button2">Doorgaan</button></a>
                <button onclick="klaar2()" id="klaar2">Klaar</button>
                <img src="../images/completed.png" id="completed2">
            </div>
            <div id="opdracht3html">
                <img src="../images/praktijk2.png" id="praktijk2">
                <h6 id="kop3">Kleurrijk</h6>
                <p id="tekst3">Praktijk</p>
                <img src="../images/locked.png" id="locked2">
                <a href="./exercise3.php"><button id="button3">Doorgaan</button></a>
                <button onclick="klaar3()" id="klaar3">Klaar</button>
                <img src="../images/completed.png" id="completed3">
            </div>
            <div id="opdracht4html">
                <img src="../images/praktijk2.png" id="praktijk3">
                <h6 id="kop4">Laat eens een foto zien!</h6>
                <p id="tekst4">Praktijk</p>
                <img src="../images/locked.png" id="locked3">
                <a href="./exercise4.php"><button id="button4">Doorgaan</button></a>
                <button onclick="klaar4()" id="klaar4">Klaar</button>
                <img src="../images/completed.png" id="completed4">
                <button id="php" onclick="window.location.href='./phpexercises/phpexercises.php'"><a href="./phpexercises/phpexercises.php" id="aphp">Ga naar het volgende level!</button></a>
            </div>
            <div id="bubble"><p id="p1bubble">Welkom bij de BitClub exercises!</p>
        <img src="../arrow.png" id="arrow1" onclick="nextBubble()">
        <img src="../arrow.png" id="arrow2" onclick="nextBubble2()">
        <img src="../arrow.png" id="arrow3" onclick="nextBubble3()">
        <img src="../arrow.png" id="arrow4" onclick="nextBubble4()">
        <button id="skip" onclick="skipAll()">Overslaan</button>
        </div>
        <img src="../character.png" id="character">
        <div id="boxhulp"><h2>Hulp</h2></div>
        <button onclick="showBubble()" id="show"><img src="../arrowup.png" width=100%></button>
    <script src="js/knoppen.js"></script>
        <script src="js/knoppen.js"></script>
    </body>
</html>
<?php 
} else {
    navbarr();
    ?>
    <h1>Exercises</h1>
    <h4 id="level1h4">Level 1/3: HTML & CSS!</h4>
    <img src="../images/unlocked.png" id="unlocked">
    <div id="box">
        <button id="allesklaar" onclick="allesKlaar()">Alles klaar</button>
        <div id="opdracht1html">
            <img src="../images/theorie.png" id="theorie">
            <h6 id="kop1">Waar moet ik beginnen?</h6>
            <p id="tekst1">Theorie</p>
            <a href="./exercise1.php"><button id="button1">Doorgaan</button></a>
            <button onclick="klaar()" id="klaar">Klaar</button>
            <img src="../images/completed.png" id="completed">
        </div>
        <div id="opdracht2html">
            <img src="../images/praktijk2.png" id="praktijk">
            <h6 id="kop2">Een titel zegt alles</h6>
            <p id="tekst2">Praktijk</p>
            <img src="../images/locked.png" id="locked">
            <a href="./exercise2.php"><button id="button2">Doorgaan</button></a>
            <button onclick="klaar2()" id="klaar2">Klaar</button>
            <img src="../images/completed.png" id="completed2">
        </div>
        <div id="opdracht3html">
            <img src="../images/praktijk2.png" id="praktijk2">
            <h6 id="kop3">Kleurrijk</h6>
            <p id="tekst3">Praktijk</p>
            <img src="../images/locked.png" id="locked2">
            <a href="./exercise3.php"><button id="button3">Doorgaan</button></a>
            <button onclick="klaar3()" id="klaar3">Klaar</button>
            <img src="../images/completed.png" id="completed3">
        </div>
        <div id="opdracht4html">
            <img src="../images/praktijk2.png" id="praktijk3">
            <h6 id="kop4">Laat eens een foto zien!</h6>
            <p id="tekst4">Praktijk</p>
            <img src="../images/locked.png" id="locked3">
            <a href="./exercise4.php"><button id="button4">Doorgaan</button></a>
            <button onclick="klaar4()" id="klaar4">Klaar</button>
            <img src="../images/completed.png" id="completed4">
            <button id="php"><a href="./phpexercises/phpexercises.php" id="aphp">Ga naar het volgende level!</button></a>
        </div>
        <div id="bubble"><p id="p1bubble">Welkom bij de BitClub exercises!</p>
        <img src="../arrow.png" id="arrow1" onclick="nextBubble()">
        <img src="../arrow.png" id="arrow2" onclick="nextBubble2()">
        <img src="../arrow.png" id="arrow3" onclick="nextBubble3()">
        <img src="../arrow.png" id="arrow4" onclick="nextBubble4()">
        <button id="skip" onclick="skipAll()">Overslaan</button>
        </div>
        <img src="../character.png" id="character">
        <div id="boxhulp"><h2>Hulp</h2></div>
        <button onclick="showBubble()" id="show"><img src="../arrowup.png" width=100%></button>
    <script src="js/knoppen.js"></script>
</body>
</html>
<?php
   } ?>