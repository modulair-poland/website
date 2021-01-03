<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- the browser should render the page with the device width !-->
    <link rel="icon" href="/images/logo-no-text.svg">
    <link rel="stylesheet" href="./css/module-list.css">
    <script type="text/javascript" src="./scripts/change-theme.js"> </script>
    <script type="text/javascript" src="./scripts/in-development-info.js"> </script>
    <title>ModulAir</title>
  </head>
  <body>
    <?php include "./includes/header.html" ?>
    <?php include "./includes/footer.html" ?>

    <div class="body-background"></div>
    <div class="intro-background"></div>
    <div class="search-bar-background"></div>
    <div class="list-background"></div>
    <div class="my-module-background"></div>

    <div class="intro">
      <div class="text">
        <h1>Modules</h1>
        a complete list
      </div>
      <div class="intro-image desktop-only">
        <img src="images/logo.svg" alt="no image found">
      </div>
    </div>
    <div class="search-bar">
      <h1>A complete list of modules provided by ModulAir</h1>
      <div class="text desktop-only">
        These are our modules
      </div>
      <div class="panel panel-singular">
        <input type="text" placeholder="Search..." onkeyup="searchModules(this.value)">
      </div>
    </div>
    <div class="list" id="modulesList">
    </div>
    <div class="my-module">
      Didn't find any module that would suit Your needs? Check out <a class="in-development">My-Module kit</a>
      to help You create Your own.
    </div>
  </body>

  <script type="text/javascript">
    doAll();
    setPopUpListeners();
  </script>
  <script>
  function searchModules(str)
  {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function()
    {
      if(this.status == 200)
      {
        document.getElementById("modulesList").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "getmodules.php?q="+str, true);
    xhttp.send();
  }
  searchModules("");
  </script>
</html>
