<?php
require_once('../Model/model.php');
include_once('../View/Header.html');

session_start();

if (isset($_SESSION['Email']) && isset($_SESSION['UserName'])) {
    $email = $_SESSION['Email'];
    $UserName = $_SESSION['UserName'];

    if (isset($_POST['Submit'])) {
        $NewPassword = $_POST["NewPassword"];
        $RePassword = $_POST["RePassword"];

        if (!empty($NewPassword) && !empty($RePassword) && $RePassword === $NewPassword) {
            if (updatepassword($email, $UserName, $NewPassword)) {
                echo "Successfully Reset your Password";
                exit();
            } else {
                echo "<center>Failed.</center>";
            }
        }
    }
}

?>

