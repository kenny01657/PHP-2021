<?php

class AutoOverzicht {

    private $autoos;

    function __construct() {
        $this->autoos = [
            new Auto("Audi", 102500.00, "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP._vQFXypIcZEl3Ip3BvGGcQHaEK%26pid%3DApi&f=1"),
            new Auto("Ferrari", 99500.00, "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.vFODlT-nQ9gLKUO9iESekwHaEI%26pid%3DApi&f=1"),
            new Auto("Fiat", 10500.00, "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.5Regk-xXBeVfiX9t3czq-AHaEK%26pid%3DApi&f=1"),
        ];
    }

    public function voegAutoToe($merk, $prijs, $image_url) {
        $newAuto = new Auto($merk, $prijs, $image_url);
        $this->autoos[] = $newAuto;
    }

    public function getGefilterdeLijst($minPrijs, $maxPrijs, $merk) {
        $newAutoLijst = [];

        foreach($this->autoos as $auto) {
            if($auto->getPrijs() > $minPrijs && $auto->getPrijs() < $maxPrijs) {
                if($merk == "alle-merken") {
                    $newAutoLijst[] = $auto;
                } else if ($auto->getMerk() == $merk) {
                    $newAutoLijst[] = $auto;
                }

            }
        }
        return $newAutoLijst;
    }

    public function getAutoLijst() {
        return $this->autoos;
    }

    public function showCars($merk, $prijs , $image_url) {
        // begin 1
        echo "<div class='car-card'>";
    
          // begin 2
          echo "<div class='car-text'>";
    
            echo "<p>" . $merk . "</p>"; 
            
            echo "<p>$" . $prijs . "</p>"; 
    
          // eind 2
          echo "</div>";
    
          echo "<img class='car-img' src='" . $image_url . "' alt='car image'>";
    
        // eind 1  
        echo "</div>";
    }

}