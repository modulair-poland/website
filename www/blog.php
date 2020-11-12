<?php
require_once("dbutils.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-dark">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/blog.css">
    <title>ModulAir</title>
  </head>
  <body>
    <div class="header-background"></div>
    <div class="intro-background"></div>
    <div class="latest-updates-background"></div>
    <div class="updates-by-type-background"></div>
    <div class="all-updates-background"></div>
    <div class="footer-background"></div>

    <div class="header">
      <a class="logo">
        LOGO
      </a>
      <a class="home">
        Home
      </a>
      <a class="get-started">
        Get started
      </a>
      <a class="modules">
        Modules
      </a>
      <a class="documentation">
        Documentation
      </a>
      <a class="app">
        Application
      </a>
      <a class="faq">
        FAQ
      </a>
      <a class="about">
        About
      </a>
    </div>
    <div class="intro">
      <h1>Official blog</h1>
      and updates
    </div>
    <div class="latest-updates">
      <h1>Latest updates</h1>
      <div class="list">
        <?php
        
        $result=easyQuery("SELECT * FROM blog");
        while($row = $result->fetch_assoc())
        {
          echo "<div class=\"panel panel-tiny-icon\">";
          echo "<div class=\"text\">";
          echo "<h3>".$row['title']."</h3>";
          echo $row['shortDescription'];
          echo "</div>";
          echo "<div class=\"icon\">";
          echo "<img src=\"".$row['image']."\" alt=\"this is an icon (type)\"";
          echo "</div> </div>";        
        }


        ?>
        </div>
    </div>
    <div class="updates-by-type">
      <h1>Updates by type</h1>
      <div class="panels">
        <div class="panel">
          <div class="text">
            <h3>Hardware</h3>
          </div>
          <div class="icon">
            type icon
          </div>
        </div>
        <div class="panel">
          <div class="text">
            <h3>Software</h3>
          </div>
          <div class="icon">
            type icon
          </div>
        </div>
        <div class="panel">
          <div class="text">
            <h3>Support</h3>
          </div>
          <div class="icon">
            type icon
          </div>
        </div>
        <div class="panel">
          <div class="text">
            <h3>Outreach</h3>
          </div>
          <div class="icon">
            type icon
          </div>
        </div>
      </div>
    </div>
    <div class="all-updates">
      <h1>All updates</h1>
      list of contents
    </div>
    <div class="footer">
      this is a footer
    </div>
  </body>
</html>
