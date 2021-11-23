<?php 
session_start();

$users = array(
    "Kenny" => array("pwd" => "1234", "rol" => "Administrator"),
    "Jan" => array("pwd" => "1235", "rol" => "Gebruiker"),
    "Tim" => array("pwd" => "1236", "rol" => "Administrator"),
);

if(isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if(isset($_POST["knop"]) && isset($users[$_POST["login"]]) && $users[$_POST["login"]]["pwd"] == $_POST["pwd"]) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
                              "pwd" => $users[$_POST["login"]]["pwd"],
                              "rol" => $users[$_POST["login"]]["rol"]);
    $message = "Welkom " . $_SESSION["user"]["naam"] . ", met de rol: " . $_SESSION["user"]["rol"];
} else {
    $message = "Inloggen";
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <h1><?php echo $message;?></h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" name="login">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="pwd">
        </div>
        <input type="submit" name="knop">
    </form>
    <p><a href="<?php 
    if(isset($_SESSION["user"]["rol"]) && $_SESSION["user"]["rol"] == "Administrator") {
        echo "admin.php";
    } else if (isset($_SESSION["user"]["rol"]) && $_SESSION["user"]["rol"] == "Gebruiker") {
        echo "website.php";
    }
    ?>">Website</a></p>
    <!-- <p><a href="admin.php">Admin website</a></p> -->
    <p><a href="login.php?loguit">uitloggen</a></p>
</body>
</html>