<?php 
    include_once("programma.php");
    include_once("liedje.php");

    $ditProgramma = new radioProgramma("Sky Radio", "Nummer 1 radio station Nederland");
    $nieuwLiedje = new liedje("dit is de titel", "Rolling stones");

    $ditProgramma->addLiedje($nieuwLiedje);

    foreach($ditProgramma->getProgramma() as $programma) {
        echo $programma . "<br>";
    }

    echo "<br>";

    foreach($ditProgramma->getLiedjes() as $liedje) {
        echo $liedje->getTitel() . " - " . $liedje->getArtiest() . "<br>";
    }

?>