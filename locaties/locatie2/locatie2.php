<?php
include "navbar.php";
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
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
        <div id="tag">
        <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>
    </div>

    <div id="logos">
        <a href="https://www.instagram.com/bit_academy_/">
        <img id="insta" src="instagram.png" alt="Insta Logo">
        </a>
        <a href="https://www.linkedin.com/school/bit-academy-nl/?originalSubdomain=nl">
        <img id="linkedin" src="Linkedin.png" alt="LinkedIn Logo">
        </a>
        <a href="https://www.facebook.com/wearebitacademy/">
        <img id="facebook" src="Facebook.png" alt="facebook Logo">
        </a>
    </div>

    <div id="box">
        <img id="kasteel" src="kasteel.jpg" alt="Science locatie">
        <h1 id="kasteelt">Noorderpoort X Bit Academy</h1>
        <p id="p1">In het Kasteel in Groningen, <br> waar groei en tech perfect samen komen.</p>
        <img id="arrow" src="arrow.png" alt="Down Arrow">
    </div>

    <div id="box1"></div>
        <img id="gron" src="groningen.jpg" alt="Science locatie">
        <h1 id="school">Noorderpoort College</h1>
        <p id="schoolt">Deze opleiding tot software developer <br>is onderdeel van de Bit Academy. <br> We leiden je op tot IT’er van de toekomst. <br>Na de opleiding <br> kun je als professional gelijk doorstromen<br> naar het bedrijfsleven of een hbo-vervolgstudie. </p>
        <img id="arrow1" src="arrow.png" alt="Down Arrow">
        <p id="title1">Noorderpoort Bit Academy</p>
        <button id="meer"><a href="https://www.noorderpoort.nl/mbo-opleidingen/kunst-en-creatie/software-developer-bit-academy-25604#Leslocatie" id="meer2">Meer Info!</button></a>
    </body>
</html>
<html>
<body>
<?php
        } else {
            navbarr();
        
        ?>
        <div id="tag">
        <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>
    </div>

    <div id="logos">
        <a href="https://www.instagram.com/bit_academy_/">
        <img id="insta" src="instagram.png" alt="Insta Logo">
        </a>
        <a href="https://www.linkedin.com/school/bit-academy-nl/?originalSubdomain=nl">
        <img id="linkedin" src="Linkedin.png" alt="LinkedIn Logo">
        </a>
        <a href="https://www.facebook.com/wearebitacademy/">
        <img id="facebook" src="Facebook.png" alt="facebook Logo">
        </a>
    </div>

    <div id="box">
        <img id="kasteel" src="kasteel.jpg" alt="Science locatie">
        <h1 id="kasteelt">Noorderpoort X Bit Academy</h1>
        <p id="p1">In het Kasteel in Groningen, <br> waar groei en tech perfect samen komen.</p>
        <img id="arrow" src="arrow.png" alt="Down Arrow">
    </div>

    <div id="box1"></div>
        <img id="gron" src="groningen.jpg" alt="Science locatie">
        <h1 id="school">Noorderpoort College</h1>
        <p id="schoolt">Deze opleiding tot software developer <br>is onderdeel van de Bit Academy. <br> We leiden je op tot IT’er van de toekomst. <br>Na de opleiding <br> kun je als professional gelijk doorstromen<br> naar het bedrijfsleven of een hbo-vervolgstudie. </p>
        <img id="arrow1" src="arrow.png" alt="Down Arrow">
        <p id="title1">Noorderpoort Bit Academy</p>
        <button id="meer"><a href="https://www.noorderpoort.nl/mbo-opleidingen/kunst-en-creatie/software-developer-bit-academy-25604#Leslocatie" id="meer2">Meer Info!</button></a>
        <script src="js/script.js"></script>
    </body>
</html>
<?php
}
?>