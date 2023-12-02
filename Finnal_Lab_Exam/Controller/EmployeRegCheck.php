<?php
require_once('../Model/Admin_Model.php');


if (isset($_POST['Submit'])) 
{
      $eName = $_POST["employee_Name"];
      $ecompany = $_POST["company_Name"];
      $contactinfo = $_POST["Name"];
      $username = $_POST["Name"];
      $password = $_POST["Name"];
      $confirmed pass = $_POST["UserName"];



    if (signupAdmin( ) )
    {
        echo "Registration Successful ";
        exit();
    } else {
        echo "<center>Registration failed.</center>";
    }
    
}

?>

    
