<?php
require_once('../Model/Admin_Model.php');


if (isset($_POST['Submit'])) 
{
      $Name = $_POST["Name"];
      $U_Name = $_POST["UserName"];

    $Password = $_POST["Password"];




    if (signupAdmin($Name,$U_Name,  $Password ) )
    {
        echo "Registration Successful ";
        exit();
    } else {
        echo "<center>Registration failed.</center>";
    }
    
}

?>
