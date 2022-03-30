<?php

  if($_POST) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["img-url"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["img-url"]["tmp_name"]);
      if(!$check) {
        $uploadOk = 0;
      }
    }
    
    // Check if file already exists
    if (file_exists($target_file)) {
      $uploadOk = 0;
      $_POST["img-url"] = $target_file;
    }
    
    // Check file size
    if ($_FILES["img-url"]["size"] > 500000) {
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      $uploadOk = 0;
    }
    
    // if everything is ok, try to upload file
    if ($uploadOk) {
      if (move_uploaded_file($_FILES["img-url"]["tmp_name"], $target_file)) {
        $_POST["img-url"] = $target_file;
      }
    }
  }

?>