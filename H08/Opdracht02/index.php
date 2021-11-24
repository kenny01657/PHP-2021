<?php

require_once("Auto.php");

$merk;
$minPrijs;
$maxPrijs;

$autos = [
    new Auto("Audi", "102500.00", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP._vQFXypIcZEl3Ip3BvGGcQHaEK%26pid%3DApi&f=1"),
    new Auto("Ferrari", "99500.00", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.vFODlT-nQ9gLKUO9iESekwHaEI%26pid%3DApi&f=1"),
    new Auto("Fiat", "10500.00", "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.5Regk-xXBeVfiX9t3czq-AHaEK%26pid%3DApi&f=1"),
];

if(isset($_POST["submit"])) {
  $merk = $_POST["cars"];
  $minPrijs = $_POST["min-prijs"];
  $maxPrijs = $_POST["max-prijs"];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Wheely</title>
</head>

<body>
    <header class="header">
        <h1 class="margin-right-left">Mr Wheely</h1>
        <ul class="sections margin-right-left">
            <li class="section">Section 1</li>
            <li class="section">Section 2</li>
            <li class="section">Section 3</li>
            <li class="section">Section 4</li>
        </ul>
    </header>
    <div class="container">
        <form action="" method="post" class="search-parameters">
            <ul class="parameter-list">
                <li class="parameter-list-item">
                    <label for="cars" class="parameter-text">Merk:</label>
                    <select name="cars" class="car-select-box">
                        <option value="alle-merken">Alle merken</option>
                        <option value="Audi">Audi</option>
                        <option value="Ferrari">Ferrari</option>
                        <option value="Fiat">Fiat</option>
                        <option value="Mercedes">Mercedes</option>
                        <option value="Opel">Opel</option>
                        <option value="Volkswagen">Volkswagen</option>
                    </select>
                </li>
                <li class="parameter-list-item">
                    <label for="min-prijs" class="parameter-text">Minimale prijs:</label>
                    <input type="text" class="car-select-box" name="min-prijs">
                </li>
                <li class="parameter-list-item">
                    <label for="max-prijs" class="parameter-text">Maximale prijs:</label>
                    <input type="text" class="car-select-box" name="max-prijs">
                </li>
                <input type="submit" name="submit" class="btn">
            </ul>
        </form>
        <section class="cars-section">
            <div class="car-container">

                <?php 
                if(isset($merk) && isset($_POST["submit"])) {
                  foreach($autos as $auto) {
                    showCars($auto->getMerk() == $merk, $auto->getPrijs(), $auto->getImageUrl());
                  }
                } else {
                  showCars($auto->getMerk(), $auto->getPrijs(), $auto->getImageUrl());
                }



                function showCars($merk, $prijs , $image_url) {
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
            
              ?>
            </div>
        </section>
    </div>

</body>

</html>