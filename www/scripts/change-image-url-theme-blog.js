const class_ = ["hardware", "software", "support", "outreach"];

const path = ["hardware-light.svg", "software-light.svg", "support-light.svg", "outreach-light.svg"];
const path_dark = ["hardware-dark.svg", "software-dark.svg", "support-dark.svg", "outreach-dark.svg"];

/* change theme by a button */
function changeImageSource() {
  if(document.documentElement.className == "theme-dark") {
    for(let i = 0; i < path.length; i++) {
      let el = document.getElementsByClassName(class_[i]);
      for(let j = 0; j < el.length; j++) {
        el[j].src = "./images/" + path_dark[i];
      }
    }
  }else {
    for(let i = 0; i < path.length; i++) {
      let el = document.getElementsByClassName(class_[i]);
      for(let j = 0; j < el.length; j++) {
        el[j].src = "./images/" + path[i];

      }
    }
  }
}
