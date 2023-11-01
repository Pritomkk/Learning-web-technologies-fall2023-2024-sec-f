<?php
 session_destroy();
 unset($_SESSION['flag']);
 header('Location: ../view/Login.php');
?>