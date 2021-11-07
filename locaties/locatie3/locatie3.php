<?php
include "navbar.php";
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>BitClub | Locatie H20 Esports Purmerend</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
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
        <img id="science" src="h20.jpg" alt="Science locatie">
        <h1 id="sciencet">H20 x Bit Academy</h1>
        <p id="p1">Op de H20 Esports Campus <br> in Purmerend, gedreven door<br> e-sports en creative tech.</p>
        <img id="arrow" src="arrow.png" alt="Down Arrow">
    </div>

    <div id="box1"></div>
        <img id="park" src="airplace.jpeg" alt="Science locatie">
        <h1 id="campus">H20 Esports</h1>
        <p id="campust"> Jongeren worden tijdens de opleiding Software <br>Developer opgeleid om software te ontwikkelen <br>voor verschillende toepassingen zoals websites,<br> games en mobiele apps. <br> Op de H20 esports campus zijn ook <br> verschillende jonge technologische <br> bedrijven gevestigd om zo kruisbestuiving <br> tussen onderwijs en bedrijven te stimuleren.</p>
        <img id="arrow1" src="arrow.png" alt="Down Arrow">
        <p id="title1">H20 Esports Purmerend</p>
        <button id="meer"><a href="https://www.horizoncollege.nl/opleidingen/software-developer-bit-academy/" id="meer2">Meer Info!</button></a>
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
        <img id="science" src="h20.jpg" alt="Science locatie">
        <h1 id="sciencet">H20 x Bit Academy</h1>
        <p id="p1">Op de H20 Esports Campus <br> in Purmerend, gedreven door<br> e-sports en creative tech.</p>
        <img id="arrow" src="arrow.png" alt="Down Arrow">
    </div>

    <div id="box1"></div>
        <img id="park" src="airplace.jpeg" alt="Science locatie">
        <h1 id="campus">H20 Esports</h1>
        <p id="campust"> Jongeren worden tijdens de opleiding Software <br>Developer opgeleid om software te ontwikkelen <br>voor verschillende toepassingen zoals websites,<br> games en mobiele apps. <br> Op de H20 esports campus zijn ook <br> verschillende jonge technologische <br> bedrijven gevestigd om zo kruisbestuiving <br> tussen onderwijs en bedrijven te stimuleren.</p>
        <img id="arrow1" src="arrow.png" alt="Down Arrow">
        <p id="title1">H20 Esports Purmerend</p>
        <button id="meer"><a href="https://www.horizoncollege.nl/opleidingen/software-developer-bit-academy/" id="meer2">Meer Info!</button></a>
</body>
</html>
<?php
}
?>


