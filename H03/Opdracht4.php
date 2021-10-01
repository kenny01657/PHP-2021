<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP opdracht 4</title>
    <style>
        body {
            text-align: center;
        }

        .red {
            border: 5px solid red;
        }

        .green {
            border: 5px solid green;
        }
    </style>
</head>
<body>
    <?php

    for($i = 1; $i <= 9; $i++) {
        if ($i % 2 == 0) {
            $class = "class='red'";
        } else {
            $class = "class='green'";
        }

        echo "<img ".$class." src='img/apen/aap".$i.".jpg'>";
    }
    ?>
</body>
</html>