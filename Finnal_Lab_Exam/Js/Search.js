function search() {
    let username = document.getElementById("search").value;
  
    let person=
    {
      "Employe_Name":username
    }

    let data  = JSON.stringify(person);

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../Controller/SearchEmployee.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    xhttp.onreadystatechange = function () {
      if (xhttp.readyState == 4 && xhttp.status == 200) 
      {
        let =JSON.parse(xhttp.responseText);
        document.getElementById("searchemp").innerHTML = empname.Employe_Name;
      }
     
    };
    xhttp.send("person=" + data);
  }