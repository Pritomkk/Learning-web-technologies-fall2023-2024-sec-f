<?php 
    session_start();
    if(!isset($_SESSION['FirstName']) && !isset($_SESSION['LastName']))
    {
        header('location:../View/Login.php');
    }
?>