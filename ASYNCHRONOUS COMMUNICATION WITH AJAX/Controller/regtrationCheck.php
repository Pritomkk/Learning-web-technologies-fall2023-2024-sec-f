<?php
require_once('../Model/modelUser.php');

if (isset($_POST['submit'])) {
    $Name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (signup($Name, $phone,$password, $email )) {

        header('Location:../View/login.php');
        exit(); 
    } else {
        echo "<center>Registration failed.</center>";
    }
}
?>
