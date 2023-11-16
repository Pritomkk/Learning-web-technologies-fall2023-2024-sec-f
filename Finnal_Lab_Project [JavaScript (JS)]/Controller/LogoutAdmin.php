<?php
 session_start();
 session_destroy();
 unset($_SESSION['AdminFirstName']);
 unset($_SESSION['AdminLastName']);
// setcookie('email', $Email, time() -1 , '/');
 header('Location: ../view/Login_Admin.php');
?>
