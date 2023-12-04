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
                                <form action="../Controller/regtrationCheck.php" method="post" onsubmit="return registerUser()">
                                     Email: <input type="email" id="email" name="email" onblur="checkEmailAvailability(this.value)">
                                    <span id="i" onmouseover="show()" onmouseout="out()"> i </span><br><div id="emailAvailability"></div><br>
                                    Name: <input type="text" id="name" name="name" ><br>
                                    Phone: <input type="text" id="phone" name="phone" ><br>
                                    Password: <input type="password" id="password" name="password" ><br>
                                    Confirm Password: <input type="password" id="confirmPassword" name="confirmPassword" ><br>
                                    <input type="submit" name="submit" value="Register">
                                </form>
</main>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <script>

function checkEmailAvailability(email) 
{
    let xhr = new XMLHttpRequest();
    let email_input = encodeURIComponent(email);
    xhr.open("GET", "../Controller/emailCheck.php?email_=" + email_input, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("emailAvailability").innerHTML = xhr.responseText;
        }
    };

    xhr.send();
}


function validName(name) {
            if (name === "") {
                alert('Name is required!');
                return false;
            }
            return true;
        }

function validatePassword(password) {
            if (password === "") {
                alert('Fill the password Properly');
                return false;
            }

            if (password.length <= 8) {
                alert("Password must be at least 8 characters long.");
                return false;
            }

            let specialCharacters = ['@', '#', '$', '%'];
            let containsSpecialChar = false;

            for (let char of specialCharacters) {
                if (password.includes(char)) {
                    containsSpecialChar = true;
                    break;
                }
            }

            if (!containsSpecialChar) {
                alert("Password must contain at least one of the special characters (@, #, $, %).");
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
function show() 
{
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "anything@example.com";
}

function out() {
    let emailInput = document.getElementById("i");
    emailInput.innerHTML = "i";
}

        function email(email) {
            if (email === "") {
                alert('Please provide your valid email');
                return false;
            }

            return true;
        }

        function Phone(phone) {
            if (phone.trim() === "") {
                alert("Phone number is required");
                return false;
            } else if (phone.length !== 11 || isNaN(phone)) {
                alert("Phone number must be 11 digits");
                return false;
            }

            return true;
        }

        function registerUser() {
            let name = document.getElementById('name').value;
            let password = document.getElementById('password').value;
            let confirmPassword = document.getElementById('confirmPassword').value;
            let emailInput = document.getElementById('email').value;
            let phone = document.getElementById('phone').value;

            if (
                !validName(name) ||
                !email(emailInput) ||
                !validatePassword(password) ||
                !confirmpass(password, confirmPassword) ||
                !Phone(phone)
            ) {
                return false; 
            }

            return true; 
        }



        
    </script>

</body>
</html>
