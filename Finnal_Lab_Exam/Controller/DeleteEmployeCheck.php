<?php
require_once('../Model/modelAdmin.php');

if (isset($_REQUEST['Username'])) 
{
    $username= $_REQUEST['Username'];
    $success = DeleteEmp($username);

    if ($success) 
    {
        header('location:../View/Delete_Employe.php');
    } 
    else {
        echo "Error deleting user.";
    }
} else {
    echo "Invalid request.";
}