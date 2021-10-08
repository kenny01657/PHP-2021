<?php

if ($_POST["voornaam"] == "") {
    echo "Je moet nog een naam invullen!<br>";
    echo "<a href=\"../opdracht 2/Opdracht2.html\">Terug naar het formulier</a><br>";
}

if ($_POST["adres"] == "") {
    echo "Je moet nog een adres invullen!<br>";
    echo "<a href=\"../opdracht 2/Opdracht2.html\">Terug naar het formulier</a><br>";
}

if ($_POST["e-mail"] == "") {
    echo "Je moet nog een e-mail invullen!<br>";
    echo "<a href=\"../opdracht 2/Opdracht2.html\">Terug naar het formulier</a><br>";
}

if ($_POST["wachtwoord"] == "") {
    echo "Je moet nog een wachtwoord invullen!<br>";
    echo "<a href=\"../opdracht 2/Opdracht2.html\">Terug naar het formulier</a><br>";
}

if ($_POST["voornaam"] !== "" && $_POST["wachtwoord"] !== "" && $_POST["adres"] !== "" && $_POST["e-mail"] !== "") {
    print_r($_POST);
}

