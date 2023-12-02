<?php

require_once("../Model/db.php");

function signupAdmin($Name,$userName,$password )
{
    $con = getConnection();
    $sql = "SELECT * FROM admininfo WHERE UserName ='$userName' ";
    $checkResult = mysqli_query($con, $sql);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<b><center>username already exists</center></b>";
        return false;
    } else 
    {   
        $insertQuery = "INSERT INTO adminInfo( Name,UserName, Password) 
                        VALUES ( '$Name', '$userName', '$password')";

        $insertResult = mysqli_query($con, $insertQuery);


        if ($insertResult) {
            return true;
        } else {
            return false;
        }
    }
}

function adminLogin($username, $password)
{
    $con = getConnection();
    $sql = "SELECT * FROM adminInfo WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $row = mysqli_num_rows($result);

        if ($row > 0) {
            $Admin = mysqli_fetch_assoc($result); 
            return true;
        } else {
            return false;
        }
    } else {
      
        return false;
    }
}




function getEmployeer($userName)
{
    $con = getConnection();
    $sql = "select * from lab_ajax where user_name ='$userName' ";
    $result = mysqli_query($con, $sql);

    $employinfo = mysqli_fetch_assoc($result);

    return $employinfo;
}

?>