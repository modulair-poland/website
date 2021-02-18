<?php
require_once("dbutils.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- the browser should render the page with the device width !-->
    <link rel="icon" href="/images/logo-no-text.svg">
    <link rel="stylesheet" href="./css/get-started.css">
    <script type="text/javascript" src="./scripts/change-theme.js"> </script>
    <script type="text/javascript" src="./scripts/change-image-url-theme-get-started.js"> </script> <!-- THE ORDER OF THESE SCRIPTS MATTERS!!!!!! (FUNCTION OVERLOADING) !-->
    <script type="text/javascript" src="./scripts/in-development-info.js"> </script>
    <title>ModulAir</title>
  </head>
  <body>
    <?php include "./includes/header.html" ?>
    <?php include "./includes/footer.html" ?>

    <div class="body-background"></div>
    <div class="intro-background"></div>
    <div class="tutorial-list-background"></div>
    <div class="tutorials-background"></div>


    <div class="intro">
      <div class="text">
        <h1 class="desktop-only">Get started</h1>
        Quick, comprehensive tutorials
      </div>
      <div class="intro-image">
        <img src="images/logo.svg" alt="no image found">
      </div>
    </div>
    <div class="tutorial-list">
      <h1>Tutorials</h1>
      <div class="panels">
        <div class="panel-enclosure">
          <a class="panel-link" href="#assembly-tutorial">
            <div class="panel">
              <div class="text">
                <h3>Can assembly</h3>
                How to assemble the can from all the components
              </div>
              <div class="icon">
                <img id="assembly" alt="Assembly">
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
    <div class="tutorials">
        <div class="tutorial">
            <a name="assembly-tutorial"></a>
            <h1>Can assembly</h1>
            <div class="panel-enclosure">
              <a class="panel-link">
                <div class="panel panel-long">
                  <div class="text">
                    <h3> How to assemble the can from all the components </h3>
                    <div class="text">
                        <div class="hl"></div>
                        <div class="step">
                            <div class="text">
                                Step 1.
                            </div>
                            <div class="image">
                                <img id="assembly-1" alt="image 1">
                            </div>
                        </div>
                        <div class="hl"></div>
                        <div class="step">
                            <div class="text">
                                Step 2.
                            </div>
                            <div class="image">
                                <img id="assembly-2" alt="image 2">
                            </div>
                        </div>
                        <div class="hl"></div>
                        <div class="step">
                            <div class="text">
                                Step 3.
                            </div>
                            <div class="image">
                                <img id="assembly-3" alt="image 3">
                            </div>
                        </div>
                        <div class="hl"></div>
                        <div class="step">
                            <div class="text">
                                Step 4.
                            </div>
                            <div class="image">
                                <img id="assembly-4" alt="image 4">
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="image">
                  </div>
                </div>
              </a>
            </div>
        </div>

    </div>

  </body>

  <script type="text/javascript">
    doAll();
    setPopUpListeners();
  </script>
</html>
