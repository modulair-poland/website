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
                <img src="./images/Documentation.svg" alt="Documentation">
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

        $result=easyQuery("SELECT * FROM blog ORDER BY post_date DESC, id DESC");
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
          echo "</div>";
          echo "<div class=\"date\">";
          echo date("d.m.Y", strtotime($row['post_date']));
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
              <img src="./images/my-module.png" alt="My module">
            </div>
          </div>
        </a>
      </div>

    </div>
    <div class="blog">
      Want to know more about the latest updates? Check out our <a href="blog.php">blog</a>.
    </div>
    <div class="footer">
      <div class="footer-buttons">
        <img class="logo" src="./images/logo.svg" alt="logo">
        <label>&copy; 2020 ModulAir</label>

        <button type="button"> English </button>

        <button type="button"> Dark/Light theme <img src="./images/Moon-Dark-Mode.svg" alt="moon"> / <img src="./images/Sun-Light-Mode.svg" alt="sun"> </button>
      </div>
      <div class="footer-links">
        <div class="text">
          <a href="https://github.com/modulair-poland">GitHub</a>
          <a href="https://www.facebook.com/ModulAirTeam">Fanpage</a>
          <a href="">FAQ</a>
          <a href="blog.php">Blog</a>
          <a href="about.php">About</a>
        </div>

      </div>
      <div class="footer-sponsors">
        <div class="text">
          Sponsors
          <img src="" alt="logo1">
          <img src="" alt="logo2">
          <img src="" alt="logo3">
        </div>

      </div>
    </div>
  </body>
</html>
