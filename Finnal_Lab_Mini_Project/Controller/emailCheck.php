<?php

require_once('../Model/model.php');

if (isset($_GET['email_'])) {
    $email = $_GET['email_'];

    $isAvailable = checkEmailAvailabilityInDatabase($email);

    if ($isAvailable) {
        echo "Email is available";
    } else {
        echo "Email is not available";
    }
}


?>