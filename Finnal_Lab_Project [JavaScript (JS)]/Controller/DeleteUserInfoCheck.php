<?php
require_once('../Model/modelAdmin.php');

if (isset($_REQUEST['Username'])) {
    $username= $_REQUEST['Username'];
    $success = deleteUserArtist($username);

    if ($success) 
    {
        header('location:../View/Delete_Userinfo.php');
    } 
    else {
        echo "Error deleting user.";
    }
} else {
    echo "Invalid request.";
}
