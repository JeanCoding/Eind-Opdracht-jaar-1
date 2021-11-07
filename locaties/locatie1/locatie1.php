<?php
include 'navbar.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="favicon.ico">
    <title>BitClub | Locatie Amsterdam Science Park</title>
    <link rel="stylesheet" type="text/css" href="loccss.css">
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
        <img id="science" src="science.jpg" alt="Science locatie">
        <h1 id="sciencet">Startup Village</h1>
        <p id="p1">Op het innovatieve Science Park <br>in Amsterdam, omringt door<br> universiteiten en start-ups.</p>
        <img id="arrow" src="arrow.png" alt="Down Arrow">
    </div>

    <div id="box1"></div>
        <img id="park" src="park.jpg" alt="Science locatie">
        <h1 id="campus">De Campus</h1>
        <p id="campust">Amsterdam Science Park herbergt een van de<br> grootste concentraties bètawetenschappen <br>in Europa. Een smeltkroes van innovatie.<br> Bedrijven die willen samenwerken kunnen <br>samenwerken met briljante studenten.</p>
        <img id="arrow1" src="arrow.png" alt="Down Arrow">
        <p id="title1">Amsterdam Science Park</p>
        <button id="meer"><a href="https://www.rocva.nl/MBO-onderwijs/Sectoren/ICT/Software-Developer-op-de-Bit-Academy" id="meer2">Meer Info!</button></a>
</body>
</html>
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
        <img id="science" src="science.jpg" alt="Science locatie">
        <h1 id="sciencet">Startup Village</h1>
        <p id="p1">Op het innovatieve Science Park <br>in Amsterdam, omringt door<br> universiteiten en start-ups.</p>
        <img id="arrow" src="arrow.png" alt="Down Arrow">
    </div>

    <div id="box1"></div>
        <img id="park" src="park.jpg" alt="Science locatie">
        <h1 id="campus">De Campus</h1>
        <p id="campust">Amsterdam Science Park herbergt een van de<br> grootste concentraties bètawetenschappen <br>in Europa. Een smeltkroes van innovatie.<br> Bedrijven die willen samenwerken kunnen <br>samenwerken met briljante studenten.</p>
        <img id="arrow1" src="arrow.png" alt="Down Arrow">
        <p id="title1">Amsterdam Science Park</p>
        <button id="meer"><a href="https://www.rocva.nl/MBO-onderwijs/Sectoren/ICT/Software-Developer-op-de-Bit-Academy" id="meer2">Meer Info!</button></a>
</body>
</html>
<?php
                    }
                    ?>


