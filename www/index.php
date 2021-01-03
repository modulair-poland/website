<?php
require_once("dbutils.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- the browser should render the page with the device width !-->
    <link rel="icon" href="/images/logo-no-text.svg">
    <link rel="stylesheet" href="./css/index.css">
    <script type="text/javascript" src="./scripts/change-theme.js"> </script>
    <script type="text/javascript" src="./scripts/change-image-url-theme-index.js"> </script> <!-- THE ORDER OF THESE SCRIPTS MATTERS!!!!!! (FUNCTION OVERLOADING) !-->
    <script type="text/javascript" src="./scripts/in-development-info.js"> </script>
    <title>ModulAir</title>
  </head>
  <body>
    <?php include "./includes/header.html" ?>
    <?php include "./includes/footer.html" ?>

    <div class="body-background"></div>
    <div class="intro-background"></div>
    <div class="getting-started-background"></div>
    <div class="latest-updates-background"></div>
    <div class="my-module-background"></div>
    <div class="blog-background"></div>


    <div class="intro">
      <div class="text">
        <h1 class="desktop-only">ModulAir</h1>
        The main website of the modular satellite project
      </div>
      <div class="intro-image">
        <img src="images/logo.svg" alt="no image found">
      </div>
    </div>
    <div class="getting-started">
      <h1>Start Your journey with science</h1>
      <div class="panels">
        <div class="panel-enclosure">
          <a class="panel-link in-development">
            <div class="panel">
              <div class="text">
                <h3>Get started</h3>
                Start quickly with this beginner's guide
              </div>
              <div class="icon">
                <img id="get-started" alt="Get started">
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
                <img id="modules" alt="Modules">
              </div>
            </div>
          </a>
        </div>
        <div class="panel-enclosure">
          <a class="panel-link in-development">
            <div class="panel">
              <div class="text">
                <h3>Documentation</h3>
                A thouroughly prepared, intelligible documentation
              </div>
              <div class="icon">
                <img id="documentation" alt="Documentation">
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
        while (($row = $result->fetch_assoc()) && $i) {
            echo "<div class=\"panel panel-tiny-icon\">";
            echo "<div class=\"text\">";
            echo "<h4>".$row['title']."</h4>";
            echo $row['shortDescription'];
            echo "</div>";
            echo "<div class=\"icon\">";
            echo "<img class=\"".$row['updateType']."\" alt=\"".$row["updateType"]."\">";
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
      <h1>My-Module</h1>
      <div class="panel-enclosure">
        <a class="panel-link in-development">
          <div class="panel panel-large">
            <div class="text">
              <h3> Can't find any module that fits Your needs? </h3>
              Now you can design your own with My-Module kit.
            </div>
            <div class="image">
              <img id="my-module" alt="My module">
            </div>
          </div>
        </a>
      </div>

    </div>
    <div class="blog">
      Want to know more about the latest updates? Check out our <a href="blog.php">blog</a>.
    </div>
  </body>

  <script type="text/javascript">
    doAll();
    setPopUpListeners();
  </script>
</html>
