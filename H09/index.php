<?php 
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
                //check if breadoverview already exists
                if(!$_SESSION["breadOverview"]) {
                    $_SESSION["breadOverview"] = new BreadOverview();
                }
                
                // Check if current post is equel to the previous post
                if(!$_SESSION["post"]) {
                    $_SESSION["post"] = [];
                }

                if($_POST == $_SESSION['post']) {
                    unset($_POST);
                } else {
                    $_SESSION["post"] = $_POST;
                }

                // Editing bread item
                if(isset($_POST["edit"])) {
                    $currentBread = $_POST["header-text"];
                    if($_POST["img-url"] === "uploads/") {
                        $_POST["img-url"] = $_SESSION["breadOverview"]->getBreadOverview()[$currentBread]->getImg_url();
                    }
                    $_SESSION["breadOverview"]->editBread($currentBread, $_POST["flour"], $_POST["shape"], $_POST["weight"], $_POST["img-url"]);
                }
                
                // Adding bread item
                if(isset($_POST["submit-btn"])) {
                    $currentBread = $_POST["header-text"];
                    $_SESSION["breadOverview"]->addBread($_POST["flour"], $_POST["shape"], $_POST["weight"], $_POST["img-url"]);
                }
                
                // Deleting bread item
                if(isset($_POST["delete"])) {
                    $currentBread = $_POST["header-text"];
                    $_SESSION["breadOverview"]->removeBread($currentBread);
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