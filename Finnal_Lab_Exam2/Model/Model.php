<?php
 require_once('db.php');

 function login($email, $password) {
    $con = getConnection();
    $sql = "SELECT * FROM persons WHERE EmailID='$email' AND Password ='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function signup($Name,  $Password, $EmailID, $UserType,$Status)
{
    $con = getConnection();
    $sql = "SELECT * FROM persons WHERE  EmailID = '$EmailID'";
    $checkResult = mysqli_query($con, $sql);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<b><center>Email already exists</center></b>";
        return false;
    } else {   
        $insertQuery = "INSERT INTO persons(Name, Password, EmailID, UserType,Status) 
                        VALUES ('$Name', '$Password', '$EmailID', '$UserType','$Status')"; 

        $insertResult = mysqli_query($con, $insertQuery);

        if ($insertResult) {
            return true;
        } else {
            return false;
        }
    }
}




function checkEmailAvailabilityInDatabase($email) {
    $con = getConnection(); 
    $sql = "SELECT EmailID FROM persons WHERE EmailID='$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        return true; 
    } else {
        return false; 
    }
}

function Data($email) 
{

    $con = getConnection();
    $sql = "SELECT * FROM persons WHERE EmailID='$email'";
    $result =mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo " not found.";
    }
}

function displayUserInformation()
{
    $con = getConnection();
    $sql = "SELECT * FROM persons ";
    $result = mysqli_query($con, $sql);

    $rows = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;  
    }

    return $rows;
}












?>