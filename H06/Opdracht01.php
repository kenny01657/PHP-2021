<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border: solid 1px black;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }
    </style>
</head>
<body>

    <table>

    <?php
        $serverName = "localhost";
        $dbname = "id17648454_phpschool";
        $userName = "id17648454_root";
        $password = "<DS+qJ1dxt&c&~[8";

        try {
            $conn = new PDO("mysql:host={$serverName};port=3306;dbname={$dbname}", $userName, $password);
            // echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }

        $query = "SELECT * FROM cursist";
        $stmt = $conn->prepare($query) or die ("Error 1");
        $stmt->execute() or die ("Error 2");

        while($row = $stmt->fetch()){
            echo "<tr>";
            echo "<td>".$row["cursistnr"]."</td>";
            echo "<td>".$row["naam"]."</td>";
            echo "<td>".$row["roepnaam"]."</td>";
            echo "<td>".$row["straat"]."</td>";
            echo "<td>".$row["postcode"]."</td>";
            echo "<td>".$row["plaats"]."</td>";
            echo "<td>".$row["geslacht"]."</td>";
            echo "<td>".$row["geb_datum"]."</td>";
            echo "</tr>";
        }

    ?>
    </table>
</body>
</html>