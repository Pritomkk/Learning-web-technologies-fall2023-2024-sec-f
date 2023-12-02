<?php
    require_once ("../Model/EmployeModel.php");

    $employee_Name = $_POST["employee_Name"];
    $company_Name = $_POST["company_Name"];
    $Contact_Num = $_POST["Contact_Num"];
    $UserName = $_POST["UserName"];
    $password = $_POST["Password"];
    $updateEmployer = updateEmployer($name,$username,$companyName,$contactNum,$password);

        if ($updateEmployer)
        {
            header('location:../views/adminHome.php');
        }
        else 
        {
            echo "can not update employer";
        }
    
?>