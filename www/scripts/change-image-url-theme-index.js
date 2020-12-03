const id = ["get-started", "modules", "documentation", "my-module"];

const path = ["Get-started-light.svg", "Modules-light.svg", "Documentation-light.svg", "my-module-light.png"];
const path_dark = ["Get-started-dark.svg", "Modules-dark.svg", "Documentation-dark.svg", "my-module-dark.png"];

const class_ = ["hardware", "software", "support", "outreach"];

const path_updates = ["hardware-light.svg", "software-light.svg", "support-light.svg", "outreach-light.svg"];
const path_dark_updates = ["hardware-dark.svg", "software-dark.svg", "support-dark.svg", "outreach-dark.svg"];

/* change theme by a button */
function changeImageSource() {
  /* change urls of getting started */
  if(document.documentElement.className == "theme-dark") {
    for(let i = 0; i < path.length; i++) {
      document.getElementById(id[i]).src = "./images/" + path_dark[i];
    }
  }else {
    for(let i = 0; i < path.length; i++) {
      document.getElementById(id[i]).src = "./images/" + path[i];
    }
  }
  /* change urls of latest updates */
  if(document.documentElement.className == "theme-dark") {
    for(let i = 0; i < path_updates.length; i++) {
      let el = document.getElementsByClassName(class_[i]);
      for(let j = 0; j < el.length; j++) {
        el[j].src = "./images/" + path_dark_updates[i];
      }
    }
  }else {
    for(let i = 0; i < path_updates.length; i++) {
      let el = document.getElementsByClassName(class_[i]);
      for(let j = 0; j < el.length; j++) {
        el[j].src = "./images/" + path_updates[i];
      }
    }
  }
}
