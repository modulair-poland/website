
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
  }else if(this.classList.contains("clicked")) {
    this.classList.add("unclicked");
    this.classList.remove("clicked");
  }
}
