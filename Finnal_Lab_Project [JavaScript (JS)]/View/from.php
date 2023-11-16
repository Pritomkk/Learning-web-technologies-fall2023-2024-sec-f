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
    <table align="center" height='400'>
        <tr>
            <td>
                <form method="post">
                    <fieldset>
                        <h1>Join AS User or Artist: </h1><hr>
                        <center>
                        <input type="radio" name="UserRole" value="User">User
                        <input type="radio" name="UserRole" value="Artist">Artist <br><br>
                        <input type="submit" name="Submit" value="Submit" ><br><br>

                        <b>Already have account <a href='../View/Login.php'>Login</a> </b><hr>
</center>
                    </fieldset>
                </form>


            </td>

        </tr>        

    </table>
    <?php

    if (isset($_REQUEST['Submit'])) 
    
    {
         if (isset($_POST['UserRole'])) 
         {
            $selectedRole = $_POST['UserRole'];
        
                 if ($selectedRole === 'User') {
                 header('Location:../View/userreg.php');
                exit;
                } 
                 elseif ($selectedRole === 'Artist') {
                header('Location:../View/artistreg.php');
                exit;
                }
        }
    }
?>

      
</body>
</html>

<?php

include_once('Footer.Html');

?>