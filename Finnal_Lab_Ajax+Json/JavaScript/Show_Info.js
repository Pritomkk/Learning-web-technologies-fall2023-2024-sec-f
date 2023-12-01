function searchinfo(event) {
    let info = document.getElementById("info");
    let searchQuery = document.getElementById("infobtn").value;

    let std = {
        Employe_name: searchQuery,
        Company_name: searchQuery,
        Contact_Info: searchQuery,
        User_Name: searchQuery
    };

    let data = JSON.stringify(std);

    let xhttp = new XMLHttpRequest();
    xhttp.open("POST", "../Controller/Show_info.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let std = JSON.parse(this.responseText);

            let Info = "";
            for (let i = 0; i < std.length; i++) {

                Info += "Employe_name:" + std[i].employe_Name +
                        "<br>Company_name: " + std[i].company_Name +
                        "<br>Contact_Info: " + std[i].contact_Num +
                        "<br>User_Name: " + std[i].User_name;
            }

            info.innerHTML = Info;
        }
    };

    xhttp.send("info=" + data);
}
