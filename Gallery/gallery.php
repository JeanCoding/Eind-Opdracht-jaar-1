<?php
include './navbar.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>BitClub</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
<?php
 navbarr();
?>
<div id="tag">
        <a id='link' href="https://www.bit-academy.nl/">www.bitacademy.nl</a>

        <div id="small-box"></div>

        <div id="logos"></div>
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

<div id="slidecombo">
    <img class="mySlides" src="g1.jpg">
    <img class="mySlides" src="g2.jpg">
    <img class="mySlides" src="g3.jpg">
    <img class="mySlides" src="g4.jpg">

    <button class="bleft1" onclick="plusDivs(-1)">&#10094;</button>
    <button class="bleft" onclick="plusDivs(+1)">&#10095;</button>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
</div>

<div id="box">
    <h1 id="title1">Een Inkijkje!</h1>
    <p id="st1">• Ervaren coaches uit het bedrijfsleven</p>
    <p id="st2">• High-tech platform met gamification</p>
    <p id="st3">• Leren door te doen</p>
    <p id="st4">• Samenwerken met gemotiveerde <br>studenten</p>
</div>

<iframe id="vid1" src="https://player.vimeo.com/video/368016064?color=ffffff&title=0&byline=0&portrait=0" width="300" height="169" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
<div id="box2"></div>
    <p id="st5">Ons Verhaal</p>
    <img id="arrow" src="arrow.png" alt="Down Arrow">
    <p id="text2">Wij zijn de Bit Academy gestart, <br> omdat wij vonden dat het huidige onderwijs <br>niet meer om studenten en docenten draait, <br> maar om het onderwijs zelf. Wij willen dat <br> de ontwikkelingen van mensen <br> centraal staat en dat wij de beste <br> tech opleiding van Nederland en daarna <br> de wereld worden. Doe jij mee?</p>

</body>
</html>