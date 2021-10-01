<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP opdracht 5</title>
</head>
<body>
    <?php
        $leeftijden = array(10, 2, 65, 12);
        $prijs = 10;

        foreach($leeftijden as $leeftijd) {
            if ($leeftijd > 65) {
                $prijs = $prijs * 0.5;
            } else if ($leeftijd <= 12 && $leeftijd >= 3) {
                $prijs = $prijs * 0.5;
            } else if ($leeftijd < 3) {
                $prijs = 0;
            }
            echo $leeftijd." = ". $prijs."<br>";
            $prijs = 10;
        }
    ?>
</body>
</html>