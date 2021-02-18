const id = ["assembly", "assembly-1", "assembly-2", "assembly-3", "assembly-4"];

const path = ["assembly/can_red_fully_covered.png", "assembly/can_basic_assembly.png", "assembly/can_raw_assembly.png", "assembly/can_red_assembly.png", "assembly/can_red_fully_covered.png"];
const path_dark = ["assembly/can_red_fully_covered.png", "assembly/can_basic_assembly.png", "assembly/can_raw_assembly.png", "assembly/can_red_assembly.png", "assembly/can_red_fully_covered.png"];

/* change theme by a button */
function changeImageSource() {
  /* change urls of tutorial list */
  if(document.documentElement.className == "theme-dark") {
    for(let i = 0; i < path.length; i++) {
      document.getElementById(id[i]).src = "./images/get-started/" + path_dark[i];
    }
  }else {
    for(let i = 0; i < path.length; i++) {
      document.getElementById(id[i]).src = "./images/get-started/" + path[i];
    }
  }
}
