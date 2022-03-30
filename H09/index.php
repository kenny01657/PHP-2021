<?php 
//   ini_set('display_errors', 0);
//   ini_set('display_startup_errors', 0);
//   error_reporting(-1);
  
  include_once("Bread.php");
  include_once("BreadOverview.php");
  include_once("upload.php");
  session_start();
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
    <header class="header"></header>
    <div class="container">
        <button class="add-bread">
            <img src="img/plus (1).png" alt="plus-icon" class="add-btn">
        </button>
        <main class="bread-section">
            <form action="#" method="post" class="form hidden" enctype="multipart/form-data">
                <h2 class="form-header">Add bread to overview</h2>
                <input type="hidden" name="header-text" id="header-text">
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
                        <input type="number" name="weight" id="weight" class="select">
                    </div>
                    <div class="form-item">
                        <label for="img-url" class="label">Add image:</label>
                        <input type="file" class="input" name="img-url" id="img-url">
                    </div>
                </div>
                <input type="submit" name="submit-btn" class="submit-btn">
                <input type="submit" name="delete" class="submit-btn" value="verwijder">
            </form>

            <div class="bread-overview">

                <?php
                // Check if breadoverview already exists
                if(!$_SESSION["breadOverview"]) {
                    $_SESSION["breadOverview"] = new BreadOverview();
                }
                
                // Check if post already exists
                if(!$_SESSION["post"]) {
                    $_SESSION["post"] = [];
                }

                function checkDublicates() {
                    $postArr = [];
                    $breadOverview = [];

                    // Making the current post and all the bread items compariable array's
                    foreach($_SESSION["breadOverview"]->getBreadOverview() as $item) {
                        $flour = $item->getFlour();
                        $shape = $item->getShape();
                        $weight = $item->getWeight();
                        $breadOverview[] = [$flour, $shape, $weight];
                    }
                    
                    foreach($_POST as $item) {
                        $postArr[] = $item;
                    }
                    
                    array_splice($postArr, 0, 1);
                    array_splice($postArr, -2, 2);
                    
                    // Checking if the current post is equal to a bread item
                    foreach($breadOverview as $breadItem) {
                        if($postArr === $breadItem) {
                            return true;
                        }
                    }
                }

                // Editing bread item
                if(isset($_POST["edit"])) {
                    $currentBread = $_POST["header-text"];
                    if(!checkDublicates()) {
                        if($_POST["img-url"] === "uploads/") {
                            $_POST["img-url"] = $_SESSION["breadOverview"]->getBreadOverview()[$currentBread]->getImg_url();
                        }
                        $_SESSION["breadOverview"]->editBread($currentBread, $_POST["flour"], $_POST["shape"], $_POST["weight"], $_POST["img-url"]);
                    }
                }

                // Deleting bread item
                if(isset($_POST["delete"])) {
                    $currentBread = $_POST["header-text"];
                    if($_POST !== $_SESSION['post']) {
                        $_SESSION["post"] = $_POST;
                        $_SESSION["breadOverview"]->removeBread($currentBread);
                    }
                }

                // Adding bread item
                if(isset($_POST["submit-btn"])) {
                    if(!checkDublicates()) {
                        $_SESSION["breadOverview"]->addBread($_POST["flour"], $_POST["shape"], $_POST["weight"], $_POST["img-url"]);
                        $_SESSION["post"] = "";
                    }
                }

                // Displaying bread items
                foreach($_SESSION["breadOverview"]->getBreadOverview() as $bread) {
                    $_SESSION["breadOverview"]->displayBread($bread);
                }
                ?>
            </div>

        </main>
    </div>
    <div class="overlay hidden"></div>

    <script src="script.js"></script>
</body>

</html>