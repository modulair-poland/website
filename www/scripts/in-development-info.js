
function AddDevInfo() {
  // the main FUNCTION
  document.addEventListener("DOMContentLoaded", function() {
    setPopUpListeners();
  });
}

function setPopUpListeners() {
  let dev = document.getElementsByClassName("in-development");
  for(let i = 0; i < dev.length; i++) {
    dev[i].addEventListener("click", PopUp);
  }
}

function PopUp() {
  alert("This site is still in development. We are sorry for the inconvenience.");
}
