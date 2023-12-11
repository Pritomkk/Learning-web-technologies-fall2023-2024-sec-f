<?php
require_once('../Model/model.php');

if (isset($_POST['submit'])) {
    $Name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $UserType = $_POST["userRole"]; 
    $Status = $_POST["Status"]; 

    if (signup($Name, $password, $email, $UserType,$Status)) 
    {
        header('Location:../View/login.php');
        exit(); 
    } else {
        echo "<center>Registration failed.</center>";
    }
}
?>