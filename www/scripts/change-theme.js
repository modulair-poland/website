
const theme_button_path_light = "Sun-Light-Mode.svg";
const theme_button_path_dark = "Moon-Dark-Mode.svg";

/* setup everything */
function doAll() {
  document.addEventListener("DOMContentLoaded", function() {
    prepare();
    changeSource();
    setThemedListener();
  });
}
/* change theme */
function prepare() {
  if(localStorage.getItem('theme')) {
    document.documentElement.className = "theme-dark";
  }
}
function changeTheme()
{
  if(localStorage.getItem('theme')) {
    document.documentElement.className = "theme-light";
    localStorage.removeItem('theme');
  }else{
    document.documentElement.className = "theme-dark";
    localStorage.setItem('theme', 1);
  }
}

function setThemedListener() {
  document.getElementById("theme-button").addEventListener("click", function() {
    changeSource();
  });
}


function changeSource() {
  changeImageSource();
  if(document.documentElement.className == "theme-dark") {
    document.getElementById("theme-button").innerHTML = "Light theme <img src=\"./images/" + theme_button_path_light + "\" alt=\"sun\">";
  }else {
    document.getElementById("theme-button").innerHTML = "Dark theme <img src=\"./images/" + theme_button_path_dark + "\" alt=\"moon\">";
  }
  console.log("Changed theme");
}

function changeImageSource() {
/* this can be overloaded by another script, but must be initialised here */
}
