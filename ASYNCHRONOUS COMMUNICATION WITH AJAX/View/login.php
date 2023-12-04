<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <script src="../Javascript/validation.js" defer></script>
</head>
<body>
    <table width="100%" height="550" align="center">
        <tr>
            <td>
                <table align="center" width="50%">
                    <tr>
                        <td>
                            <main>
                                <h2>Login</h2>
                              
                                <form action="../Controller/logincheck.php" method="post" onsubmit="return loginUser()">
                                    Email: <input type="text" id="email" name="email" >
                                    Password: <input type="password" id="password" name="password" >
                                    <input type="submit" name="submit" value="Login">
                                </form>                         
                            </main>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <script>
    function loginUser() {
        let email = document.getElementById('email').value;
        let password = document.getElementById('password').value;

        if (email === "") {
            alert('Email is required!');
            return false;
        }

        if (password === "") {
            alert('Password is required!');
            return false;
        }


    }
</script>
</body>
</html>

