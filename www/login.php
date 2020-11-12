<?php
session_start();
if(isset($_SESSION['loggedin']))
{
	if($_SESSION['loggedin']==true)
	{
		header("Location: panel.php");
		die();
	}
}
else{
    require_once('dbutils.php');
    if (isset($_POST['username'])||isset($_POST['pass'])) {

                $loginsuccess=true;
                $usernotfound=false;
                $passincorrect=false;
                $result=easyQuery("SELECT id, username, pass FROM users WHERE username=?", "s", $_POST['username']);
                if ($result->num_rows>0) {
                    $row=$result->fetch_assoc();
                    if (password_verify($_POST['pass'], $row['pass'])) {
                        $loginsuccess=true;
                        $_SESSION['loggedin']=true;
                        $_SESSION['userid']=$row['id'];
                        $passincorrect=false;
                    } else {
                        $loginsuccess=false;
                        $passincorrect=true;
                    }
                } else {
                    $usernotfound=true;
                    $loginsuccess=false;
                }
        
                unset($_POST['username']);
                unset($_POST['pass']);
                if ($loginsuccess) {
                    $_SESSION['loggedin']=true;
                    header("Location: panel.php");
                }else{
                    if($passincorrect)
                    {
                        $passerror = "Your password is not correct!";
                    }else{
                        if($usernotfound)
                        {
                            $usernameerror = "You don't exist!";
                        }
                    }
                }
            }
        }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-dark">
  <head>
    <meta charset="utf-8">
    <title>ModulAir</title>
  </head>
  <body>
  <a href="index.php"> Home</a>
  <br>
    Admin login
    <form action="login.php" method="post">
    <?php
    if(isset($usernameerror))
    {
        echo $usernameerror;
    }
    ?>
    <input type="text" name="username">
    <?php
    if(isset($passerror))
    {
        echo $passerror;
    }
    ?>

    <input type="password" name="pass">


    <input type="submit" value="Log in"> 
    </form>
  </body>
</html>