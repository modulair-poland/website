<?php
session_start();
require_once("dbutils.php");
if (!isset($_SESSION['loggedin'])&&$_SESSION['loggedin']!=true) {
    header("Location: login.php");
    die();
}
$formerror="";
if (isset($_POST["moduleName"])) {
    if (!isset($_POST["moduleName"])||!isset($_POST["shortDescription"])||!isset($_POST["tags"])) {
        $formerror = "Something is not set! ";
    } else {
        $target_dir = "images/modules/";
        $target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = 1;
        $check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
        if (!$check) {
            $formerror = "This is not an image! ";
            $uploadOk = 0;
        }
        if (file_exists($target_file)) {
            $formerror = $formerror."This file already exists!. ";
            $uploadOk = 0;
          }
          if($uploadOk == 1)
          {
            if (!move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
            $formerror = "Something went wrong! Idk why.";
            }else{
                easyQuery('INSERT INTO modules (moduleName, shortDescription, tags, price, image) VALUES (?, ?, ?, ?, ?)', "sssis", $_POST["moduleName"], $_POST["shortDescription"], $_POST["tags"], $_POST['price'], basename( $_FILES["imageToUpload"]["name"]));
                $formerror = "Done!";
                unset($_POST);
            }
          }
        
    }

}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="">
  <head>
    <meta charset="utf-8">
    <title>ModulAir</title>
  </head>
  <body>
<a href="logout.php"> Log out</a>
<a href="index.php"> Home</a>
<a href="panel.php"> Panel </a>
<?php
if (isset($formerror)) {
    echo $formerror;
    unset($formerror);
}
?>
<form action="newmodule.php" method="post" enctype="multipart/form-data">
Module Name:
<input type="text" name="moduleName">
Short Decription:
<input type="text" name="shortDescription">
Tags, separated by commas:
<input type="text" name="tags">
Price, in Euro:
<input type="text" name="price">
Image:
<input type="file" name="imageToUpload" id="imageToUpload">
<input type="submit" name="sumbit" value="Add new post">
</form>

</body>
</html>
