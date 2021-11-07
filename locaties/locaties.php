<?php
include "navbar.php";
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="locaties.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>BitClub | Locatie Menu</title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['username'])) {
            loggednavbar($connect);

        ?>
         <h1>Bit Academy Locaties</h1>
        <h4 id="level1h4">Hieronder vind je alle locaties van de Bit Academy</h4>
        <div id="box">
            <div id="opdracht1html">
                <h6 id="kop1">Amsterdam Science Park</h6>
                <a href="locatie1/locatie1.php"><img src="../images/arrow_right.png" id="arrow"></a>
            </div>
            <div id="opdracht2html">
                <h6 id="kop2">Noorderpoort Groningen</h6>
                <a href="locatie2/locatie2.php"><img src="../images/arrow_right.png" id="arrow"></a>
            </div>
            <div id="opdracht3html">
                <h6 id="kop3">H20 Purmerend</h6>
                <a href="locatie3/locatie3.php"><img src="../images/arrow_right.png" id="arrow"></a>
            </div>
            <button id="verder"><a href="../home.php" id="verder2">Terug naar de home pagina</a></button>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>
<?php
        } else {
            navbarr();
        
        ?>
        <html>
        <head>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>BitClub | Locatie Menu</title>
        </head>
        <html>
                 <h1>Bit Academy Locaties</h1>
        <h4 id="level1h4">Hieronder vind je alle locaties van de Bit Academy</h4>
        <div id="box">
            <div id="opdracht1html">
                <h6 id="kop1">Amsterdam Science Park</h6>
                <a href="locatie1/locatie1.php"><img src="../images/arrow_right.png" id="arrow"></a>
            </div>
            <div id="opdracht2html">
                <h6 id="kop2">Noorderpoort Groningen</h6>
                <a href="locatie2/locatie2.php"><img src="../images/arrow_right.png" id="arrow"></a>
            </div>
            <div id="opdracht3html">
                <h6 id="kop3">H20 Purmerend</h6>
                <a href="locatie3/locatie3.php"><img src="../images/arrow_right.png" id="arrow"></a>
            </div>
            <button id="verder"><a href="../home.php" id="verder2">Terug naar de home pagina</a></button>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>
<?php
}
?>