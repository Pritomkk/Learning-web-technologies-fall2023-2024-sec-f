function searchinfo(event) {
  let info = document.getElementById("info");
  let searchQuery = document.getElementById("infobtn").value;

  let xhttp = new XMLHttpRequest();
  xhttp.open("POST", "../Controller/SearchEmployee.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
          info.innerHTML = this.responseText;
      }
  };

  xhttp.send("info=" + searchQuery);
}