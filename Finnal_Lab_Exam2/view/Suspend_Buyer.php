<?php
require_once('../Model/modelsuspenduser.php');
session_start(); 

if (!isset($_SESSION['Email'])) {
    header('Location:../View/login.php'); 
    exit();
}


$usertype = "Buyer"; 


?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <main>
        <table width="100%" height="75%">
        <h2>Welcome ADMIN, <?php echo $_SESSION['Name']; ?></h2>
     

        
            <td>
                <h2>Suspend User </h2>
                <button onclick="show()">Suspend User </button>
                <div id="suspend"> </div>
                <div id="suspendclick"> </div>
                <div id="showmsg"> </div>
                
            </td>

           
        </tr>



    </table>


    <script>

        
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




    </script>



  

      
</body>
</html>