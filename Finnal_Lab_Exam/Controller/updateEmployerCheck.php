<?php

    session_start();
    require_once ("Model/Admin_Model.php");

    $name = $_REQUEST['name'];
    $username = $_REQUEST['username'];
    $companyName = $_REQUEST['companyName'];
    $contactNum= $_REQUEST['contactNum'];
    $password= $_REQUEST['password'];

    if{

        $updateEmployer = updateEmployer($name,$username,$companyName,$contactNum,$password);

        if ($updateEmployer)
        {
            header('location:../views/adminHome.php');
        }
        else 
        {
            echo "can not update employer";
        }
    }


?>