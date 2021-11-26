<?php

require_once("Auto.php");
require_once("AutoOverzicht.php");

$autoos = new AutoOverzicht();

$minPrijs = isset($_GET["min-prijs"]) && !empty($_GET["min-prijs"]) ? $_GET["min-prijs"] : 0;
$maxPrijs = isset($_GET["max-prijs"]) && !empty($_GET["max-prijs"]) ? $_GET["max-prijs"] : 99999999;
$merk = isset($_GET["merk"]) ? $_GET["merk"] : "alle-merken";

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
        <form action="" method="get" class="search-parameters">
            <ul class="parameter-list">
                <li class="parameter-list-item">
                    <label for="merk" class="parameter-text">Merk:</label>
                    <select name="merk" class="car-select-box" id="merk">
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
                    <input type="text" class="car-select-box" name="min-prijs" id="min-prijs">
                </li>
                <li class="parameter-list-item">
                    <label for="max-prijs" class="parameter-text">Maximale prijs:</label>
                    <input type="text" class="car-select-box" name="max-prijs" id="max-prijs">
                </li>
                <input type="submit" name="submit" class="btn">
            </ul>
        </form>
        <section class="cars-section">
            <div class="car-container">

                <?php 
                
                foreach($autoos->getGefilterdeLijst($minPrijs, $maxPrijs, $merk) as $auto) {
                  $autoos->showCars($auto->getMerk(), $auto->getPrijs(), $auto->getImageUrl());
                }

              ?>
            </div>
        </section>
    </div>

</body>

</html>