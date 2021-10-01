<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP opdracht 7</title>
</head>
<body>
    <?php
        $kappersagenda = array("9.15"=>"Mevr.Pietersen", "9.30"=>"Mevr.Willems", "9.45"=>"", "10.00"=>"Paul van den Broek", "10.15"=>"Karel de Meeuw", "10.30"=>"");

        print("De volgende momenten zijn nog beschikbaar:<ul>");

        foreach($kappersagenda as $tijd => $afspraak) {
            if($afspraak == "") { 
            print("<li>".$tijd."</li>") ;
            }
        }
        print("</ul>");
            
    ?>
</body>
</html>