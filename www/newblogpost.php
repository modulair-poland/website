<?php
session_start();
require_once("dbutils.php");
if(!isset($_SESSION['loggedin'])&&$_SESSION['loggedin']!=true)
{
	header("Location: login.php");
	die();
}
if(isset($_POST["title"]))
{
    if(!isset($_POST["title"])||!isset($_POST["shortDesc"])||!isset($_POST["type"]))
    {
        $formerror = "Something is not set!";
    }else{
      $postDate = $_POST["date"];
      if($postDate=="")
      {
        $postDate = date("Y-m-d");
      }
        easyQuery('INSERT INTO blog (title, shortDescription, updateType, post_date) VALUES (?, ?, ?, ?)', "ssss", $_POST["title"], $_POST["shortDesc"], $_POST["type"], $postDate);
    }
        $formerror = "Done!";
        unset($_POST);


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
if(isset($formerror))
{
    echo $formerror;
    unset ($formerror);
}
?>
<form action="newblogpost.php" method="post">
Title:
<input type="text" name="title">
Short Decription:
<input type="text" name="shortDesc">
<select name="type">
<option value="hardware">Hardware</option>
<option value="software">Software</option>
<option value="support">Support</option>
<option value="outreach">Outreach</option>
</select>
<input type="date" name="date">
<input type="submit" name="sumbit" value="Add new post">
</form>

</body>
</html>
