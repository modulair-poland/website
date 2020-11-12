<?php
session_start();
if(!isset($_SESSION['loggedin'])&&$_SESSION['loggedin']!=true)
{
	header("Location: login.php");
	die();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-dark">
  <head>
    <meta charset="utf-8">
    <title>ModulAir</title>
  </head>
  <body>
<a href="logout.php"> Log out</a>
<a href="index.php"> Home</a>
<a href="newblogpost.php"> New Blog Post </a>
  </body>
</html>
