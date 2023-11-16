<?php
 session_start();
 session_destroy();
 unset($_SESSION['FirstName']);
 unset($_SESSION['LastName']);
 setcookie('email', $Email, time() -1 , '/');
 header('Location: ../view/Login.php');
?>
