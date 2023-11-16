<?php

if (!isset($_SESSION['UserType']) && isset($_COOKIE['email'])) 
{
    
    header('location:../View/' . $_SESSION['UserType'] . '_dashboard.php');
    exit;
}
?>

