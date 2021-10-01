<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP opdracht 6</title>
    <style>
        p {
            border: 1px solid #000;
            padding: 10px;
            margin: 0;
            display: inline-block;
        }
        img {
            width: 30px;
        }
    </style>
</head>
<body>
    <?php
        $zwemClubs = array($deSpartelkuikens = array("De spartelkuikens", 25), $deWaterBuffels = array("De waterbuffels", 32), $plonsmderin = array("Plonsmderin", 11), $bommetje = array("Bommetje", 23));

        foreach($zwemClubs as $zwemclub) {
            foreach($zwemclub as $item) {
                echo "<p>".$item."</p>";
                if(is_numeric($item)) {
                    $num = $item / 5;
                    for($i = 1; $i <= $num; $i++) {
                        echo "<img src='img/swimming stickman.png'>";
                    }
                }
            }
            echo "<br>";
        }
    ?>
    
</body>
</html>