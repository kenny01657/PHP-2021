<?php 
class Auto {
    private $merk;
    private $prijs;
    private $image_url;

    function __construct($merk, $prijs, $image_url) {
        $this->merk = $merk;
        $this->prijs = $prijs;
        $this->image_url = $image_url;
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function setPrijs($prijs) {
        $this->prijs = $prijs;
    }

    public function setImageUrl($image_url) {
        $this->image_url = $image_url;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getPrijs() {
        return $this->prijs;
    }

    public function getImageUrl() {
        return $this->image_url;
    }

}