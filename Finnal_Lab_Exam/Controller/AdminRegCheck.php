<?php
require_once('../Model/Admin_Model.php');


if (isset($_POST['Submit'])) 
{
      $Name = $_POST["Name"];
      $UserName = $_POST["UserName"];
      $Password = $_POST["Password"];

    if (signupAdmin($Name,$UserName, $Password ) )
    {
        echo "Registration Successful ";
        exit();
    } else {
        echo "<center>Registration failed.</center>";
    }
    
}

?>
