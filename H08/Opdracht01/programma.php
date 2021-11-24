<?php

class radioProgramma {
    private $naam = "";
    private $omschrijving = "";
    private $liedjes = array();

    
    function __construct($naam, $omschrijving) {
        $this->setName($naam);
        $this->setOmschrijving($omschrijving);
    }

    public function addLiedje($liedje) {
        $this->liedjes[] = $liedje;
    }

    public function getLiedjes() {
        return $this->liedjes;
    }
    
    // Geeft informatie over het programma terug @return mixed array
    public function getProgramma() {
        return array("naam" => $this->naam, "omschrijving" => $this->omschrijving);
    }

    // Geeft het programma een naam @param de naam als string
    public function setName($name) {
        if(strlen($name) >= 2) {
            $this->naam = $name;
        }
    }

    // Geeft het programma een omschrijving @param de omschrijving als string
    public function setOmschrijving($omschrijving) {
        $this->omschrijving = $omschrijving;
    }

    // Returned de naam van het programma @param naam als string
    public function getName() {
        return $this->naam;
    }

    // Returned de omschrijving van het programma @param omschrijving als string
    public function getOmschrijving() {
        return $this->omschrijving;
    }
}

?>