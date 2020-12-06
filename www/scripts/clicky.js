let clicked = [];
function setUpClicky() {
  document.addEventListener("DOMContentLoaded", function() {
    let el = document.getElementsByClassName("unclicked");
    for(let i = 0; i < el.length; i++) {
      el[i].addEventListener("click", Click);
    }
    el = document.getElementsByClassName("clicked");
    for(let i = 0; i < el.length; i++) {
      el[i].addEventListener("click", Click);
    }
  });
}

function Click() {
  if(this.classList.contains("unclicked")) {
    this.classList.add("clicked");
    this.classList.remove("unclicked");
    clicked.push(this.attributes.name.value);
    loadUpdates(clicked);
  }else if(this.classList.contains("clicked")) {
    this.classList.add("unclicked");
    this.classList.remove("clicked");
    let pos = clicked.indexOf(this.attributes.name.value);
    clicked.splice(pos, 1);
    loadUpdates(clicked);
  }
}
