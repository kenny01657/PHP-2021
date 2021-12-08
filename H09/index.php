<?php 
  include_once("Bread.php");
  include_once("BreadOverzicht.php");

  $breadOverview = new BreadOverzicht();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>bakkerij Wim Vlecht</title>
</head>

<body>

    <header class="header">
        <img src="img/headerImg.jpg" alt="image of bread" class="header-img" />
    </header>
    <div class="container">
        <button class="add-bread">
            <img src="img/plus (1).png" alt="plus-icon" class="add-btn">
        </button>
        <section class="bread-section">
            <form action="#" method="post" class="form hidden">
                <h2 class="form-header">Add bread to overview</h2>
                <button class="close-btn">&times;</button>
                <div class="form-items">
                    <div class="form-item">
                        <label for="flour" class="label">Flour:</label>
                        <select name="flour" id="flour" class="select" required>
                            <option value="volkoren">Volkoren</option>
                            <option value="spelt">Spelt</option>
                            <option value="rogge">Rogge</option>
                            <option value="tarwe">Tarwe</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="shape" class="label">Shape:</label>
                        <select name="shape" id="shape" class="select" required>
                            <option value="bolvormig">Bolvormig</option>
                            <option value="vierkant">Vierkant</option>
                            <option value="rond">Rond</option>
                            <option value="rechthoek">Rechthoek</option>
                        </select>
                    </div>
                    <div class="form-item">
                        <label for="weight" class="label">Weight</label>
                        <input type="number" name="weight" id="weight" class="select" required>
                    </div>
                    <div class="form-item">
                        <label for="img-url" class="label">Add image:</label>
                        <input type="file" accept=".jpg, .jpeg, .png" class="input" name="img-url" id="img-url"
                            required>
                    </div>
                </div>
                <input type="submit" name="submit-btn" class="submit-btn">
            </form>

            <div class="bread-overview">

                <?php

                if(isset($_POST["submit-btn"])) {
                    $breadOverview->addBread($_POST["flour"], $_POST["shape"], $_POST["weight"], $_POST["img-url"]);
                    echo $_POST["img-url"];
                }

                foreach($breadOverview->getBreadOverview() as $bread) {
                  $breadOverview->displayBread($bread);
                }
                
                ?>
            </div>

        </section>
    </div>
    <div class="overlay hidden"></div>



    <script src="script.js"></script>
</body>

</html>