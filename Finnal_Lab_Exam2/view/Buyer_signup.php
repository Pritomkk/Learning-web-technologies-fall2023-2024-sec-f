<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
   
<table width="100%" height="550" align="center">
        <tr>
            <td>
                <table align="center" width="50%">
                    <tr>
                        <td>
                            <main>
                                <h2>Registration</h2>
                                <form action="../Controller/Check.php" method="post" onsubmit="return Form()">

                                    <input type="hidden" id="userRole" name="userRole" value="Buyer">
                                    <input type="hidden" id="Status" name="Status" value="Active">
                                    Name: <input type="text" id="name" name="name" ><br><br>
                                    Password: <input type="password" id="password" name="password" ><br><br>
                                    Confirm Password: <input type="password" id="confirmPassword" name="confirmPassword" ><br><br>
                                    Email: <input type="email" id="email" name="email" >
                                    <span id="i" onmouseover="show()" onmouseout="out()"> i </span><br><div id="emailAvailability"></div><br><br>
                                    <input type="submit" name="submit" value="Register">  <a href='../View/login.php'><h3>Login </h3></a>
                                </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    

<script>

function validName(name) {
    
    if (name === "") {
        alert('Name is required!');
        return false;
    }
    if (name.split(' ').length >2) {
        alert("Name must contain at least two words");
        return false;
    }
 
    return true;
}

function validatePassword(password) {
    if (password === "") {
        alert('Fill the password Properly');
        return false;
    }


    if (password.length<=8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }


    return true;
}


function confirmpass(pass, cpass) {
    if (cpass === "") {
        alert("Confirm Password required");
        return false;
    } else if (pass !== cpass) {
        alert("Confirm password doesn't match ");
        return false;
    }

    return true;
}

function email(email) {
    if (email === "") {
        alert('Please provide your valid email');
        return false;
    }

    return true;
}

function show() 
{
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "anything@example.com";
}

function out() {
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "i";
}


function Form(){
    let Name = document.getElementById('Name').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirmPassword').value;
    let emailInput = document.getElementById('email').value;

    if (!validName(Name) ||
        !email(emailInput) ||
        !validatePassword(password) ||
        !confirmpass(password, confirmPassword)
       
    ) 
    {
        return false;
    }

    return true;
}








</script>

    
</body>
</html>