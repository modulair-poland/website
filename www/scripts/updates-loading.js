function loadUpdates(what){
    let str="";
    for(let i = 0; i < what.length; i++)
    {
      str+=",";
      str+=what[i];
    }
    if(str.length == 0)
    {
      str = "hardware,software,outreach,support";
    }else{
      str = str.substring(1);
    }
    var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function()
      {
        if(this.status == 200)
        {
          document.getElementById("updatesList").innerHTML = this.responseText;
          changeImageSource();
        }
      };
      xhttp.open("GET", "getupdates.php?q="+str, true);
      xhttp.send();
  }
