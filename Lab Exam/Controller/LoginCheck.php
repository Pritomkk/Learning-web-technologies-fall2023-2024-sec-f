<?php
require_once('../Model/Model.php');
?>
<?php

session_start();
if (isset($_POST['Submit'])) 
{
    $Id= $_POST['id'];
    $password = $_POST['Password'];

    $Status= login($email, $password);

    if ($Status) 
    {
        if($Status['Usertype'] == 'User')
        {  
            $_SESSION['flag']='true';
            $_SESSION['Name'] =$Status['Name'];
            header('location:../View/admin_home.php');
     
         }elseif($Status['Usertype'] == 'Admin'){
     
           $_SESSION['name'] = $Status['name'];
            header('location:../View/user_home.php');
     
         }
        
    } else {
        echo "Login failed. Incorrect email or password.";
    }
}


?>