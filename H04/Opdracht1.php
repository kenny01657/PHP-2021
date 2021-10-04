<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdracht 1</title>
</head>
<body>
    <ul>

    <?php
    function celciusToFahrenheit($celcius) {
        $fahrenheit = ($celcius * 1.8) + 32;
        return $fahrenheit;
    }
    
    echo "<li>".celciusToFahrenheit(37)."</li>";

    function checkDefidedByThree($num) {
        if($num % 3 == 0) {
            $isDevidebleByThree = TRUE;
        } else {
            $isDevidebleByThree = FALSE;
        }
        return $isDevidebleByThree;
    }

    echo "<li>".checkDefidedByThree(9)."</li>";

    function reverseString($str) {
        return strrev($str);
    }

    echo "<li>".reverseString("Hello world!")."</li>";
    ?>
    </ul>
    
</body>
</html>