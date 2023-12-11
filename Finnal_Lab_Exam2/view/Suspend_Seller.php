<?php
require_once('../Model/modelsuspenduser.php');


$usertype = "Seller"; 

?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../javascript/suspandUser.js"></script>
</head>
<body>

    <h2>Welcome ADMIN, <?php echo $_SESSION['Name']; ?></h2>

        <main>
        <table width="100%" height="75%">
     

        
            <td>
                <h2>Suspend User </h2>
                <button onclick="show()">Suspend User </button>
                <div id="suspend"> </div>
                <div id="suspendclick"> </div>
                <div id="showmsg"> </div>
                
            </td>

           
        </tr>



    </table>

        
        </table>



    </main>


    <script>
        function show() {
    let enterEmail = document.getElementById('suspend');
    enterEmail.innerHTML = '<br><input type="email" id="email" placeholder="enter user email"/>';
    let submit = document.getElementById('suspendclick');
    submit.innerHTML = '<br><input type="submit" id="Submit" onclick="SuspendUser()">';
}

function SuspendUser() {
    let email = document.getElementById("email").value;
    if(email==="")
    {
        alert("Enter the User email Properly");
        return false;
    }
    let xhttp = new XMLHttpRequest();

    xhttp.open("POST", "../Model/modelsuspenduser.php?act=suspendUser", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("showmsg").innerHTML = xhttp.responseText;
        }
    };

    xhttp.send("email=" + encodeURIComponent(email));
}



    </script>




  

      
</body>
</html>