<?php
include_once('Header.Html');
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table width="100%" height="550"align="center">
            <tr>
                <td 
                    <main>
                        <table align="center">
                            <form method="post" action="../controllar/Logincheck.php">
                                <fieldset align="center" width="70%" height="300">
                                    <legend align="center"><h1>Login</h1></legend>
                                    User Name: <input type="text" name="name"/><br><br>
                                    Password: <input type="password" name="pass"/><hr>
                                    <input type="checkbox" name="rememberme" value="remember">Remember Me<br><br>
                                    <input type="submit" name="Login" value="Login">  
                                    <a href="FORGOT PASSWORD.php">Forget Password?</a>
                                </fieldset>
                            </form>
                        </table>
                    </main>
                </td>
            </tr>
        </table>
</body>
</html>

<?php

include_once('Footer.Html');

?>