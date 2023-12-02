<?php
require_once('../Model/Admin_Model.php');


if (isset($_POST['Submit'])) 
{
        $UserName = $_POST["UserName"];
      $Password = $_POST["Password"];

    if (adminLogin($UserName, $Password ) )
    {
        header('location:../View/Adminhome.php');
        exit();
    } else {
        echo "<center>Login failed.</center>";
    }
    
}

?>








header('location:../View/'.$_SESSION['UserType'].'_dashboard.php');