function filter(str){
      const xhttp = new XMLHttpRequest();
      xhttp.onload = function(){
          document.getElementById("tablazat").innerHTML = this.responseText;
      };
      xhttp.open("GET", "getItems.php?szures="+str);
      xhttp.send();
  };

