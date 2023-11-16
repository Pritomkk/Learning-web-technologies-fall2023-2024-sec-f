<?php
require_once('../Model/modelAdmin.php');
?>

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
                        <a href="../View/forgetnewpassadmin.php">
                        <img src="../Asset/logo.png"alt="company logo" width="200" height="50"> 
                       </a>
                   </td>
                   <td align="left">
                   <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                   </td>
                   <td align="right">
                       <a href="../View/public_home.html">Home </a>  | &nbsp;
                       <a href="../View/Login_Admin.php">Login</a>  |&nbsp;
                   </td>
           
               </tr>
           </table>
   </header> 
   <hr>

<?php
session_start();

if (isset($_POST['Submit'])) 
{
    $email = $_POST['Email'];
    $UserName= $_POST['UserName'];
    $Forget= CheckAdmin($email, $UserName);

    if ($Forget) 
    {
            $_SESSION['Email']=$Forget['Email'];
            $_SESSION['UserName']=$Forget['UserName'];
          
            header('location:../View/forgetnewpassadmin.php');
    } 
        
    else {
        echo "<center><h3>Login failed. Incorrect email or password.</center></h3>";
    }
}
?>
