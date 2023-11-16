
<?php
require_once('../Controller/SessionCheck.php');
//require_once('../Controller/CookieCheck.php');
?>

<?php
    $FirstName=$_SESSION['FirstName'];
    $LastName=$_SESSION['LastName'];
    $UserType=$_SESSION['UserType'];
    $UserName=$_SESSION['UserName'];
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../javascript/changePassword.js"defer></script>
</head>
    <body>

        <header>
           
                <table width="100%">
                    <tr >
                        <td align="left"width="10%" >
                            <a href="../View/<?php echo $UserType; ?>_dashboard.php">
                             <img src="../Asset/logo.png"alt="company logo" width="200" height="50"> 
                            </a>
                        </td>
                        <td align="left">
                        <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                        </td>
                        <td align="right">
                            <a href="../View/Show_<?php echo $UserType; ?>Profile.php">
                            <b>Welcome <?php echo $UserType; ?>, <?php echo $FirstName . ' ' . $LastName; ?></b>
                            </a> | &nbsp;
                            <a href="../View/<?php echo $UserType; ?>_dashboard.php">Home</a> | &nbsp;
                            <a href="../View/About.php">About </a>  |&nbsp;
                            <a href=" # ">Contact</a>  |&nbsp;
                            <a href=" # ">FAQ</a>  |&nbsp;
                            <a href="../Controller/Logout.php">Logout</a> 
                        </td>
                
                    </tr>
                </table>
        </header> 
        <hr>

<table align="center" width="100%" height="420">
    <tr>
        <td>
            <table align='center' width="30%">
                <tr>
                    <td>
                        <main>
                            <form action="../Controller/ChangepassCheck.php" method="post" onsubmit="return Form()" enctype="">
                                <fieldset>
                                    <legend align="center"><h1>VAN GOGH</h1></legend>
                                    Current Password:
                                    <input type="password" name="CurrentPass" id="CurrentPassword" value="" /> <br><br>
                                    New Password:
                                    <input type="password" name="NewPassword" id="NewPassword" value="" /> <br><br>
                                    Retype New Password:
                                    <input type="password" name="RenewPassword" id="Repassword" value="" /> <br><br>
                                    </hr>
                                    <input type="submit" name="Submit" value="Submit" />
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

include_once('../View/Footer.Html');

?>