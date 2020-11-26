<?php
require_once("dbutils.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-light">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/blog.css">
    <script type="text/javascript" src="./scripts/change-theme.js"> </script>
    <script type="text/javascript" src="./scripts/change-image-url-theme-blog.js"> </script>
    <title>ModulAir</title>
  </head>
  <body>
    <div class="body-background"></div>
    <div class="header-background"></div>
    <div class="intro-background"></div>
    <div class="latest-updates-background"></div>
    <div class="updates-by-type-background"></div>
    <div class="all-updates-background"></div>
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
        <h1>Official blog</h1>
        and updates
      </div>
      <div class="intro-image">
        <img src="images/logo.svg" alt="no image found">
      </div>
    </div>
    <div class="updates-by-type">
      <h1>Updates by type</h1>
      <div class="panels">
        <div class="panel-enclosure">
          <a class="panel-link" href="">
            <div class="panel">
              <div class="text">
                <h3>Hardware</h3>
              </div>
              <div class="icon">
                <img class="hardware" alt="hardware">
              </div>
            </div>
          </a>
        </div>
        <div class="panel-enclosure">
          <a class="panel-link" href="">
            <div class="panel">
              <div class="text">
                <h3>Software</h3>
              </div>
              <div class="icon">
                <img class="software" alt="software">
              </div>
            </div>
          </a>
        </div>
        <div class="panel-enclosure">
          <a class="panel-link" href="">
            <div class="panel">
              <div class="text">
                <h3>Support</h3>
              </div>
              <div class="icon">
                <img class="support" alt="support">
              </div>
            </div>
          </a>
        </div>
        <div class="panel-enclosure">
          <a class="panel-link" href="">
            <div class="panel">
              <div class="text">
                <h3>Outreach</h3>
              </div>
              <div class="icon">
                <img class="outreach" alt="outreach">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="all-updates">
      <h1>All updates</h1>
      <div class="list">
        <?php

        $result=easyQuery("SELECT * FROM blog ORDER BY post_date DESC, id DESC");
        while($row = $result->fetch_assoc() )
        {
          echo "<div class=\"panel panel-tiny-icon\">";
          echo "<div class=\"text\">";
          echo "<h3>".$row['title']."</h3>";
          echo $row['shortDescription'];
          echo "</div>";
          echo "<div class=\"icon\">";
          echo "<img class=\"".$row['updateType']."\" alt=\"".$row["updateType"]."\">";
          echo "</div>";
          echo "<div class=\"date\">";
          echo date("d.m.Y", strtotime($row['post_date']));
          echo "</div> </div>";
        }


        ?>
        </div>
    </div>
    <div class="footer">
      <div class="footer-buttons">
        <img class="logo" src="./images/logo.svg" alt="logo">
        <label>&copy; 2020 ModulAir</label>

        <button type="button"> English </button>

        <button id="theme-button" type="button" onclick="changeTheme();"> </button>
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

  <script type="text/javascript">
    doAll();
  </script>
</html>
