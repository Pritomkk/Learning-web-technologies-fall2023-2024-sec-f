<?php
$name = $email = $un = $pass = $cPass = $gender = $dob = "";

    $username = $_REQUEST["un"];
    $password = $_REQUEST["pass"];

    session_start();
    if (isset($_REQUEST['Submit']))
    {
    $_SESSION["un"] = $username;
    $_SESSION["password"] = $password;

   
    }

    echo "Registration successful!";
   // header('location: ../view/LOGIN.php');
?>


