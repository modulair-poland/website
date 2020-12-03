<!DOCTYPE html>
<html lang="en" dir="ltr" class="theme-light">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/about.css">
    <script type="text/javascript" src="./scripts/change-theme.js"> </script>
    <script type="text/javascript" src="./scripts/in-development-info.js"> </script>
    <title>ModulAir</title>
  </head>
  <body>
    <div class="body-background"></div>
    <div class="header-background"></div>
    <div class="intro-background"></div>
    <div class="who-we-are-background"></div>
    <div class="cansat-contest-background"></div>
    <div class="our-sponsors-background"></div>
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
        <h1>About us</h1>
        Team, contest, and sponsors
      </div>
      <div class="intro-image">
        <img src="images/logo.svg" alt="no image found">
      </div>
    </div>
    <div class="who-we-are">
      <h1>Who we are</h1>
      <div class="text">
        ModulAir is a team from a Toruń high school, taking part in the CanSat competition in Poland.
        Our aim is to popularise science by making the process of mini-satellite creation
        easier and thus more accessible to people without engineering or programming experience, as well as simply faster for geeks.
        We believe that probe creation doesn't need to be difficult! And that is why we give You all the documentation, projects and tips for doing it Yourself!
      </div>
      <div class="text">
        Our team:
        <ul>
          <li>Wojciech Malecha (leader)</li>
          <li>Mikołaj Juda</li>
          <li>Piotr Lorek</li>
          <li>Marcin Jabłoński</li>
          <li>Nikodem Gapski</li>
        </ul>
      </div>
      <div class="text">
        Social media:
        <a href="https://www.facebook.com/ModulAirTeam"> Fanpage </a>, <a href="https://github.com/modulair-poland">GitHub repository</a>
      </div>
    </div>
    <div class="cansat-contest">
      <h1>CanSat ESA contest</h1>
      <div class="text">
        The European CanSat Competition organized by ESA is a challenge aimed at students from 14 to 19 years old.
        The participants work in a <span class="emphasis">team</span> to build, test and launch a mini-satellite to be deployed from a rocket at an altitude of 1km.
        The contest grants a great <span class="emphasis">experiece</span> ranging from engineering and programing to collecting funds and teamwork,
        so it can be a challenge for anyone!
      </div>
    </div>
    <div class="our-sponsors">
      <h1>Our dear sponsors</h1>
      <div class="text">
        Of course the project wouldn't ever come to existence if not for our dear sponsors, who supported us their experiece and fundings, and to whom we are thankful.
      </div>
      <div class="text">
        <!-- THIS IS TO BE ADDED WHEN SOME RELIABLE SPONSORS APPEAR
        The list of our sponsors:
        <ul>
          <li>One company</li>
          <li>Another company</li>
        </ul>
        !-->
      </div>
    </div>
    <div class="special-thanks">
      <h1>Special thanks</h1>
      <div class="text">
        We would like to thank Marta Hering-Zagrocka for designing our logo and Eliza Reinhold for designing visual elements for our website.
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
</html>
