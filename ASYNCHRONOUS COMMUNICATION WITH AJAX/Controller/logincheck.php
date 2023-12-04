<?php
require_once('../Model/modelUser.php');
session_start();

if (isset($_POST['submit']) ) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = login($email, $password);

    if ($user) {
        $_SESSION['Name'] = $user['Name'];
        $_SESSION['Email'] = $user['EmailID'];
        $_SESSION['Phone'] = $user['Phone'];

        header('location:../View/home.php');
        exit();
    } else {
        header('location:../View/login.php');
        exit();
    }
} else {

    header('location:../View/login.php');
    exit();
}
?>
