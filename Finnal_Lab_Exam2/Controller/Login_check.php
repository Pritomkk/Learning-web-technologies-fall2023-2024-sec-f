<?php
require_once('../Model/Model.php');
session_start();

if (isset($_POST['submit'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Status = login($email, $password);

    if ($Status) 
    {  
        if ($Status['UserType'] =='Buyer' || $Status['UserType'] == 'Admin' || $Status['UserType'] == 'Seller') 
        {
            $_SESSION['Name'] = $Status['Name'];
            $_SESSION['UserType'] = $Status['UserType'];
            $_SESSION['Email'] = $Status['EmailID'];


            header('location:../View/'.$_SESSION['UserType'].'_dashboard.php');
        }
            
    }

    else {
        echo"INCORRECT PASSWORD OR EMAIL";
    }


}

else {
    echo"PLEASE REGISTER FIRST";
}

 
?>