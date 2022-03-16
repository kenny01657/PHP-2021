<?php

class BreadOverview {
    private $breadOverview;

    function __construct() {
        // $this->breadOverview = [];
    }

    public function addBread($flour, $shape, $weight, $image_url) {
        $this->breadOverview[] = new Bread($flour, $shape, $weight, $image_url);
    }

    public function editBread($bread, $flour, $shape, $weight, $image_url) {
        $currentBread = $this->breadOverview[$bread];

        $currentBread->setFlour($flour);
        $currentBread->setShape($shape);
        $currentBread->setWeight($weight);
        $currentBread->setImg_url($image_url);
    }

    public function getBreadOverview() {
        return $this->breadOverview;
    }

    // public function getBread($bread) {
    //     return $this->breadOverview[$bread];
    // }

    public function removeBread($bread) {
        $tempArr = [];
        unset($this->breadOverview[$bread]);
        $tempArr = array_values($this->breadOverview);
        $this->breadOverview = $tempArr;
    }

    public function displayBread($bread) {
        // Begin 1
        echo "<div class='bread-container'>";

        
            echo "<img class='remove-btn hidden' src='img/delete.png' alt='remove button'>";


            echo "<img src='" . $bread->getImg_url() . "' alt='image of bread' class='bread-card-image'>";

            // Begin 2
            echo "<ul class='bread-info'>";
                
                // Item 1
                echo "<li class='info-item'>";
                    echo "<img src='img/wheat.png' alt='wheat-icon'>";
                    echo "<p class='color-green bold'>Meel: </p>";
                    echo "<div class='flour'>" . $bread->getFlour() . "</div>";
                echo "</li>";

                // Item 2
                echo "<li class='info-item'>";
                    echo "<img src='img/bread.png' alt='bread-icon'>";
                    echo "<p class='color-green bold'>Vorm: </p>";
                    echo "<div class='shape'>" . $bread->getShape() . "</div>";
                echo "</li>";

                // Item 3
                echo "<li class='info-item'>";
                    echo "<img src='img/balance.png' alt='weight-icon'>";
                    echo "<p class='color-green bold'>Gewicht: </p>"; 
                    echo "<div class='weight'>" . $bread->getWeight() . " gram" . "</div>";
                echo "</li>";

            // Eind 2
            echo "</ul>";

        // Eind 1
        echo "</div>";
    }
}