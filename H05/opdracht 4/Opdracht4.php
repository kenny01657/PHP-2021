<?php

function checkValidCredentials($email, $wachtwoord) {
    if($email == "piet@worldonline.nl" && $wachtwoord == "doetje123") {
        return TRUE;
    } else if($email == "klaas@carpets.nl" && $wachtwoord == "snoepje777") {
        return TRUE;
    } else if($email == "truushendriks@wegweg.nl" && $wachtwoord == "arkiearkie201") {
        return TRUE;
    } else {
        return FALSE;
    }
}

if(checkValidCredentials($_POST["e-mail"], $_POST["wachtwoord"])) {
    echo "Welkom";
} else {
    echo "Sorry, geen toegang";
}