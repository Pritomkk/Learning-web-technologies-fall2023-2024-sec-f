<?php
session_start(); 

include_once('../View/Header.html');
require_once('../Model/model.php');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../javascript/forgetNewPassword.js" defer></script>
</head>
<body>
    <table align="center" width="100%" height="420">
        <tr>
            <td>
                <table align='center' width="30%">
                    <tr>
                        <td>
                            <main>
                                <form action="../Controller/ForgetNewPasswordCheck.php" method="post" onsubmit="return Form()"enctype="multipart/form-data">
                                    <fieldset>
                                        <legend align="center"><h1>Reset Password</h1></legend>

                                        New Password:
                                        <input type="password" id="NewPassword"name="NewPassword" value="" /><br><br>
                                        <hr>

                                        Retype New Password:
                                        <input type="password" id="RePassword" name="RePassword" value="" /><br><br>
                                        <hr>
                                        <input type="submit" name="Submit" value="Submit"/>
                                    </fieldset>
                                </form>
                            </main>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
include_once('../View/Footer.html');
?>
