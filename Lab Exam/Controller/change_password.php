<?php
require_once('../Controller/SessionCheck.php');
?>


<?php

session_start()

if (isset($_REQUEST["submit"])) {
    $user_id = $_SESSION['user_id']; 
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $result = changePassword($user_id, $current_password, $new_password, $confirm_password);
    echo $result;
}
?>

