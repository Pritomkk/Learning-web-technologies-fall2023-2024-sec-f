<?php

function Suspend_User($email) {
    $con = getConnection();
    $sql = " Update persons WHERE EmailID='$email' AND set ='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}



?>