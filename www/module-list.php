<?php
require_once("version.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-light">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/module-list.css?v=<?php echo $version; ?>">
    <script type="text/javascript" src="./scripts/change-theme.js"> </script>
    <script type="text/javascript" src="./scripts/in-development-info.js"> </script>
    <title>ModulAir</title>
  </head>
  <body>
    <div class="body-background"></div>
    <div class="header-background"></div>
    <div class="intro-background"></div>
    <div class="search-bar-background"></div>
    <div class="list-background"></div>
    <div class="my-module-background"></div>
    <div class="footer-background"></div>

    <div class="header">
      <a class="logo" href="index.php">
        ModulAir <div class="vl"></div>
      </a>
      <a class="home" href="index.php">
        Home
      </a>
      <a class="get-started in-development">
        Get started
      </a>
      <a class="modules" href="module-list.php">
        Modules
      </a>
      <a class="documentation in-development">
        Documentation
      </a>
      <a class="app in-development">
        Application
      </a>
      <a class="faq in-development">
        FAQ
      </a>
      <a class="about" href="about.php">
        About
      </a>
    </div>
    <div class="intro">
      <div class="text">
        <h1>Modules</h1>
        a complete list
      </div>
      <div class="intro-image">
        <img src="images/logo.svg" alt="no image found">
      </div>
    </div>
    <div class="search-bar">
      <h1>A complete list of modules provided by ModulAir</h1>
      <div class="text">
        These are our modules
      </div>
      <div class="panel panel-singular">
        <input type="text" placeholder="Search..." onkeyup="searchModules(this.value)">
      </div>
    </div>
    <div class="list" id="modulesList">
    </div>
    <div class="my-module">
      Didn't find any module that would suit Your needs? Check out <a href="#">My module kit</a>
      to help You create Your own.
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
          <a class="in-development">FAQ</a>
          <a href="blog.php">Blog</a>
          <a href="about.php">About</a>
        </div>

      </div>
      <div class="footer-sponsors">
        <div class="text">
          <!-- THIS IS TO BE ADDED ONCE WE HAVE SOME RELIABLE SPONSORS
          Sponsors
          <img src="" alt="logo1">
          <img src="" alt="logo2">
          <img src="" alt="logo3">
          !-->
        </div>

      </div>
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
