<?php

function editArtistProfile($FirstName, $LastName, $UserName, $Email, $Dob, $Gender, $Phone) {
    $con = getConnection();
    $updates = array();

    if (!empty($FirstName)) {
        $updates[] = "FirstName = '$FirstName'";
    }

    if (!empty($LastName)) {
        $updates[] = "LastName = '$LastName'";
    }

    if (!empty($Email)) {
        $updates[] = "Email = '$Email'";
    }

    if (!empty($Dob)) {
        $updates[] = "DateofBirth = '$Dob'";
    }

    if (!empty($Gender)) {
        $updates[] = "Gender = '$Gender'";
    }

    if (!empty($Phone)) {
        $updates[] = "PhoneNumber = '$Phone'";
    }
    if (empty($updates)) {
       
        return false;
    }


    $updateQuery = "UPDATE userartist SET " . implode(', ', $updates) . " WHERE UserName = '$UserName'";
    $updateResult = mysqli_query($con, $updateQuery);

    if ($updateResult) {
        return true; 
    } else {
        return false;
    }
}


?>