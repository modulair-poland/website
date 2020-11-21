<?php
require_once("dbutils.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-light">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/index.css">
    <title>ModulAir</title>
  </head>
  <body>
    <div class="header-background"></div>
    <div class="intro-background"></div>
    <div class="getting-started-background"></div>
    <div class="latest-updates-background"></div>
    <div class="my-module-background"></div>
    <div class="blog-background"></div>
    <div class="footer-background"></div>

    <div class="header">
      <a class="logo" href="index.php">
        ModulAir
      </a>
      <a class="home" href="index.php">
        Home
      </a>
      <a class="get-started" href="">
        Get started
      </a>
      <a class="modules" href="module-list.php">
        Modules
      </a>
      <a class="documentation" href="">
        Documentation
      </a>
      <a class="app" href="">
        Application
      </a>
      <a class="faq" href="">
        FAQ
      </a>
      <a class="about" href="about.php">
        About
      </a>
    </div>
    <div class="intro">
      <div class="text">
        <h1>ModulAir</h1>
        The main website of the greatest CanSat project ever made
      </div>
      <div class="intro-image">
        <img src="images/logo.svg" alt="no image found">
      </div>
    </div>
    <div class="getting-started">
      <h1>Start Your journey with science</h1>
      <div class="panels">
        <div class="panel-enclosure">
          <a class="panel-link" href="">
            <div class="panel">
              <div class="text">
                <h3>Get started</h3>
                This is how to get started quickly
              </div>
              <div class="icon">
                This is an icon
              </div>
            </div>
          </a>
        </div>
        <div class="panel-enclosure">
          <a class="panel-link" href="module-list.php">
            <div class="panel">
              <div class="text">
                <h3>Modules</h3>
                A complete list of modules, choose whichever suit your needs
              </div>
              <div class="icon">
                This is an icon
              </div>
            </div>
          </a>
        </div>
        <div class="panel-enclosure">
          <a class="panel-link" href="">
            <div class="panel">
              <div class="text">
                <h3>Documentation</h3>
                A thouroughly prepared documentation for geeks
              </div>
              <div class="icon">
                This is an icon
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
    <div class="latest-updates">
      <h1>Latest updates</h1>
      <div class="list">
        <?php

        $result=easyQuery("SELECT * FROM blog ORDER BY id DESC");
        $i = 3;
        while(($row = $result->fetch_assoc() ) && $i)
        {
          echo "<div class=\"panel panel-tiny-icon\">";
          echo "<div class=\"text\">";
          echo "<h3>".$row['title']."</h3>";
          echo $row['shortDescription'];
          echo "</div>";
          echo "<div class=\"icon\">";
          echo "<img src=\"images/".$row['updateType'].".png\" alt=\"".$row["updateType"]."\">";
          echo "</div> </div>";
          $i = $i - 1;
        }


        ?>
        </div>
    </div>
    <div class="my-module">
      <h1>My Module</h1>
      <div class="panel-enclosure">
        <a class="panel-link" href="">
          <div class="panel panel-large">
            <div class="text">
              <h3> Can't find any module that fits Your needs? </h3>
              Now you can design your own with My module kit.
            </div>
            <div class="image">
              This is a photofa jab njkab fjksba jagk abg jkabgajk bjag
              ajkg abgkaj  bgjkabg jkab jkb kjagbskj gbkjasbg jksabg jkab jks bgjkabgaj kjagbskj
              jag jkbg jkabs jkasb jkgb ka bkjsabg jioehm ioeain an ono asfb kjab jkabsg
              agkb jkasbg kjabsgkj nakjn gksn uasgoan w onflan wffinaw afwnl anwjnf awnkjl
              fnakjwfn jkawnfjknakjnf nhgkgmoiesnf awn fjab gonw apihmwap impiamw ipma piwm
              asj bgajkbg kjb kjs abkj bjkbg jsngjksfsf
            </div>
          </div>
        </a>
      </div>

    </div>
    <div class="blog">
      Want to know more about the latest updates? Check out our <a href="blog.php">blog</a>.
    </div>
    <div class="footer">
      this is a footer
    </div>
  </body>
</html>
