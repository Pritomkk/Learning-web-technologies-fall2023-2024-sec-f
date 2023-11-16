<?php
require_once('../Model/model.php');
include_once('../View/Header.Html');
?>
<?php
session_start();

if (isset($_POST['Submit'])) {
    $email = $_POST['Email'];
    $UserName= $_POST['UserName'];
    $Forget= Check($email, $UserName);


    if ($Forget) 
    {
            $_SESSION['Email']=$Forget['Email'];
            $_SESSION['UserName']=$Forget['UserName'];
          
            header('location:../View/ForgetNewPass.Php');
    } 
        
    else {
        echo "<center><h3>Login failed. Incorrect email or password.</center></h3>";
    }
}
?>
