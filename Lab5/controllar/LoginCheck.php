<?php
session_start();
$username = isset($_REQUEST["name"]) ;
$password = isset($_REQUEST["pass"]) ;

if (isset($_REQUEST['Login']))

{

    $storedName = $_SESSION["name"];
        $storedPassword = $_SESSION["password"];

        if ($username ===$storedName && $password===$storedPassword) 
        {
            echo "Login successful!";
            header('location: ../view/LOGGED_IN_DASHBOARD.html');
            exit;
          
           
        } else {

            echo "Invalid username or password.";
           
            
        }



}
        


?>

