<?php
require_once('../Controller/SessionCheck.php');
require_once('../Model/modelAdmin.php');
//require_once('../Controller/CookieCheck.php');

$FirstName=$_SESSION['FirstName'];
$LastName=$_SESSION['LastName'];
$UserName=$_SESSION['UserName'];
$UserType=$_SESSION['UserType'];
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>

        <header>
           
                <table width="100%">
                    <tr >
                        <td align="left"width="10%" >
                             <a href="../View/artist_dashboard.php">
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
</body>
</html>

<?php
   

    if (isset($_POST['Submit'])) {
        if (empty($_POST["CurrentPass"])) {
            echo "Current Password is required";
        } else {
            $currentPass = $_POST["CurrentPass"];
            if (checkAdminCurrentPass($currentPass,$UserName)) {
                if (empty($_POST["NewPassword"])) {
                    echo "New Password is required";
                } else {
                    $Password = $_POST["NewPassword"];
                    if (strlen($Password) >= 8) {
                        $specialCharacters = ['@', '#', '$', '%'];
                        $containsSpecialChar = false;
    
                        foreach ($specialCharacters as $char) {
                            if (strpos($Password, $char) !== false) {
                                $containsSpecialChar = true;
                                break;
                            }
                        }
    
                        if ($containsSpecialChar) {
                            
                        } else {
                            echo "Password must contain at least one of the special characters (@, #, $, %).";
                            return; 
                        }
                    } else {
                        echo "Password must be at least 8 characters long.";
                        return; 
                    }
                }
    
                if (empty($_POST["RenewPassword"])) {
                    echo "Retyped Password is required";
                } else {
                    $retypePass = $_POST["RenewPassword"];
    
                    if ($Password !== $retypePass) {
                        echo "New Password and Retyped Password do not match";
                    } else {
                        if (CurrentAdminPassUpdate($Password,$UserName)) {
                            echo "Password Change Successfully";
                        }
                    }
                }
            } else {
                echo "Current Password is incorrect";
            }
        }
    }

?>
<?php

include_once('../View/Footer.Html');

?>