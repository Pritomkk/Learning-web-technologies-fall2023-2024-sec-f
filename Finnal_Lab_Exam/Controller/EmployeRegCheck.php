<?php
require_once('../Model/EmployeModel.php');


if (isset($_POST['Submit'])) 
{
      $employee_Name = $_POST["employee_Name"];
      $company_Name = $_POST["company_Name"];
      $Contact_Num = $_POST["Contact_Num"];
      $UserName = $_POST["UserName"];
      $password = $_POST["Password"];

    if (signupEmploye($employee_Name, $company_Name,$Contact_Num, $UserName,$password) )
    {
        echo "Registration Successful ";
        exit();
    } else {
        echo "<center>Registration failed.</center>";
    }
    
}

?>

    
