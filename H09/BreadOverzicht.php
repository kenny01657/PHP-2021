<?php

class BreadOverzicht {
    private $breadOverview;

    function __construct() {
        $this->breadOverview = [
            new Bread("volkore", "bolvormig", 300, "img/maurizio-izzo-HHeBdtgPmD8-unsplash.jpg"),
            new Bread("spelt", "vierkant", 200, "img\jonathan-pielmayer-j1gr2w10EtQ-unsplash.jpg"),
            new Bread("tarwe", "rond", 500, "img\jude-infantini-rYOqbTcGp1c-unsplash.jpg"),
        ];
    }

    public function addBread($flour, $shape, $weight, $image_url) {
        $this->breadOverview[] = new Bread($flour, $shape, $weight, $image_url);
    }

    public function getBreadOverview() {
        return $this->breadOverview;
    }

    public function removeBread() {
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