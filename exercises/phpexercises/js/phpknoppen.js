//HTML/CSS Levels
document.getElementById("button2").style.display = "none";
document.getElementById("completed").style.display = "none";
document.getElementById("klaar2").style.display = "none";
document.getElementById("completed2").style.display = "none";
document.getElementById("completed3").style.display = "none";
document.getElementById("button3").style.display = "none";
document.getElementById("klaar3").style.display = "none";
document.getElementById("completed4").style.display = "none";
document.getElementById("button4").style.display = "none";
document.getElementById("klaar4").style.display = "none";
document.getElementById("php").style.display = "none";

//PHP Levels
document.getElementById("button1php").style.display = "none";
document.getElementById("completed1php").style.display = "none";
document.getElementById("klaar1php").style.display = "none";

function klaar() {
    document.getElementById("opdracht2html").style.background = "linear-gradient(90deg,#000563,#090979 45%,rgba(0,5,99,.731530112))";
    document.getElementById("kop2").style.color = "white";
    document.getElementById("tekst2").style.color = "white";
    document.getElementById("locked").style.display = "none";
    document.getElementById("button2").style.display = "inline"

    document.getElementById("button1").style.display = "none";
    document.getElementById("klaar").style.display = "none";
    document.getElementById("kop1").style.color = "#57be8e";
    document.getElementById("tekst1").style.color = "#57be8e";
    document.getElementById("opdracht1html").style.background = "none";
    document.getElementById("opdracht1html").style.backgroundColor = "white";
    document.getElementById("opdracht1html").style.border = "1px solid #EDEDED";
    document.getElementById("theorie").src = "./images/theorie2.png";
    document.getElementById("praktijk").src = "./images/praktijk.png";
    window.onload = document.getElementById("completed").style.display = "inline";
    document.getElementById("klaar2").style.display = "inline";
}

function klaar2() {
    document.getElementById("button2").style.display = "none";
    document.getElementById("klaar2").style.display = "none";
    document.getElementById("kop2").style.color = "#57be8e";
    document.getElementById("tekst2").style.color = "#57be8e";
    document.getElementById("opdracht2html").style.background = "none";
    document.getElementById("opdracht2html").style.backgroundColor = "white";
    document.getElementById("opdracht2html").style.border = "1px solid #EDEDED";
    document.getElementById("praktijk").src = "./images/praktijkgroen.png";
    document.getElementById("completed2").style.display = "inline";

    document.getElementById("opdracht3html").style.background = "linear-gradient(90deg,#000563,#090979 45%,rgba(0,5,99,.731530112))";
    document.getElementById("kop3").style.color = "white";
    document.getElementById("tekst3").style.color = "white";
    document.getElementById("klaar3").style.display = "inline";
    document.getElementById("locked2").style.display = "none";
    document.getElementById("button3").style.display = "inline";
    document.getElementById("praktijk2").src = "./images/praktijk.png";
}

function klaar3() {
    document.getElementById("button3").style.display = "none";
    document.getElementById("klaar3").style.display = "none";
    document.getElementById("kop3").style.color = "#57be8e";
    document.getElementById("tekst3").style.color = "#57be8e";
    document.getElementById("opdracht3html").style.background = "none";
    document.getElementById("opdracht3html").style.backgroundColor = "white";
    document.getElementById("opdracht3html").style.border = "1px solid #EDEDED";
    document.getElementById("praktijk2").src = "./images/praktijkgroen.png";
    document.getElementById("completed3").style.display = "inline";

    document.getElementById("opdracht4html").style.background = "linear-gradient(90deg,#000563,#090979 45%,rgba(0,5,99,.731530112))";
    document.getElementById("kop4").style.color = "white";
    document.getElementById("tekst4").style.color = "white";
    document.getElementById("klaar4").style.display = "inline";
    document.getElementById("locked3").style.display = "none";
    document.getElementById("button4").style.display = "inline";
    document.getElementById("praktijk3").src = "./images/praktijk.png";
}

function klaar4() {
    document.getElementById("button4").style.display = "none";
    document.getElementById("klaar4").style.display = "none";
    document.getElementById("kop4").style.color = "#57be8e";
    document.getElementById("tekst4").style.color = "#57be8e";
    document.getElementById("opdracht4html").style.background = "none";
    document.getElementById("opdracht4html").style.backgroundColor = "white";
    document.getElementById("opdracht4html").style.border = "1px solid #EDEDED";
    document.getElementById("praktijk3").src = "./images/praktijkgroen.png";
    document.getElementById("completed4").style.display = "inline";
    document.getElementById("php").style.display = "inline";
}

function allesKlaar() {
    //Opdracht 1
    document.getElementById("button1").style.display = "none";
    document.getElementById("klaar").style.display = "none";
    document.getElementById("kop1").style.color = "#57be8e";
    document.getElementById("tekst1").style.color = "#57be8e";
    document.getElementById("opdracht1html").style.background = "none";
    document.getElementById("opdracht1html").style.backgroundColor = "white";
    document.getElementById("opdracht1html").style.border = "1px solid #EDEDED";
    document.getElementById("theorie").src = "./images/theorie2.png";
    document.getElementById("completed").style.display = "inline";

    //Opdracht 2
    document.getElementById("praktijk").src = "./images/praktijkgroen.png";
    document.getElementById("button2").style.display = "none";
    document.getElementById("klaar2").style.display = "none";
    document.getElementById("kop2").style.color = "#57be8e";
    document.getElementById("tekst2").style.color = "#57be8e";
    document.getElementById("opdracht2html").style.background = "none";
    document.getElementById("opdracht2html").style.backgroundColor = "white";
    document.getElementById("opdracht2html").style.border = "1px solid #EDEDED";
    document.getElementById("completed2").style.display = "inline";
    document.getElementById("locked").style.display = "none";

    //Opdracht 3
    document.getElementById("praktijk2").src = "./images/praktijkgroen.png";
    document.getElementById("button3").style.display = "none";
    document.getElementById("klaar3").style.display = "none";
    document.getElementById("kop3").style.color = "#57be8e";
    document.getElementById("tekst3").style.color = "#57be8e";
    document.getElementById("opdracht3html").style.background = "none";
    document.getElementById("opdracht3html").style.backgroundColor = "white";
    document.getElementById("opdracht3html").style.border = "1px solid #EDEDED";
    document.getElementById("completed3").style.display = "inline";
    document.getElementById("locked2").style.display = "none";

    //Opdracht 4
    document.getElementById("praktijk3").src = "./images/praktijkgroen.png";
    document.getElementById("button4").style.display = "none";
    document.getElementById("klaar4").style.display = "none";
    document.getElementById("kop4").style.color = "#57be8e";
    document.getElementById("tekst4").style.color = "#57be8e";
    document.getElementById("opdracht4html").style.background = "none";
    document.getElementById("opdracht4html").style.backgroundColor = "white";
    document.getElementById("opdracht4html").style.border = "1px solid #EDEDED";
    document.getElementById("completed4").style.display = "inline";
    document.getElementById("locked3").style.display = "none";
    document.getElementById("php").style.display = "inline";
}
//Je drukt op de klaar knop

//- De tweede opdracht achtergrond kleur verandert naar background: linear-gradient(90deg,#000563,#090979 45%,rgba(0,5,99,.731530112)); X

//- De tekstkleur wordt wit gemaakt

//- De praktijk image word wit

//- Het slotje verdwijnt en er komt een doorgaan en klaar knop

//- De eerste opdracht achtergrond word wit

//- De eerste opdracht tekst wordt #57be8e

//- Na de eerste opdracht komt een vinkje