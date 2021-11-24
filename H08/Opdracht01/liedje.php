<?php

class liedje {
    private $titel;
    private $artiest;

    function __construct($titel, $artiest) {
        $this->setTitel($titel);
        $this->setArtiest($artiest);
    }

    // Geeft informatie over het liedje terug @return mixed array
    public function getLiedje() {
        return array("titel" => $this->titel, "artiest" => $this->artiest);
    }

    // Geeft het liedje een titel @param de titel als string
    public function setTitel($titel) {
        if(strlen($titel) >= 2) {
            $this->titel = $titel;
        }
    }

    // Geeft het liedje een artiest @param de artiest als string
    public function setArtiest($artiest) {
        $this->artiest = $artiest;
    }

    // Returned de titel van het liedje @param titel als string
    public function getTitel() {
        return $this->titel;
    }

    // Returned de artiest van het liedje @param artiest als string
    public function getArtiest() {
        return $this->artiest;
    }
    
}


?>