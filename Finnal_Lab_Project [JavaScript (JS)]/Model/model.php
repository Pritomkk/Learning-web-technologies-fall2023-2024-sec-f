<?php
 require_once('db.php');

 function login($email, $password) {
    $con = getConnection();
    $sql = "SELECT * FROM userartist WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function signup($FirstName, $LastName, $UserName, $Email, $Password, $Dob, $Gender, $Phone, $Joiningdob, $Usertype, $ProfilePicture)
{
    $con = getConnection();
    $sql = "SELECT * FROM userartist WHERE UserName ='$UserName' OR Email = '$Email'";
    $checkResult = mysqli_query($con, $sql);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<b><center>Email or username already exists</center></b>";
        return false;
    } else 
    {   
        $insertQuery = "INSERT INTO userartist (FirstName, LastName, UserName, Email, Password, DateofBirth, Gender, PhoneNumber, JoiningDate, Usertype, ProfilePicture) 
                        VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password', '$Dob', '$Gender', '$Phone', '$Joiningdob', '$Usertype', '$ProfilePicture')";

        $insertResult = mysqli_query($con, $insertQuery);


        if ($insertResult) {
            return true;
        } else {
            return false;
        }
    }
}



 function Check($email, $UserName) {
    $con = getConnection();
    $sql = "SELECT * FROM userartist WHERE Email='$email' AND UserName='$UserName'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function updatepassword($email,$UserName,$password)
{
    $con = getConnection();
    $sql = "UPDATE userartist SET Password='$password' WHERE Email='$email' AND UserName='$UserName'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }

}

function displayUserData($UserName) 
{

    $con = getConnection();
    $sql = "SELECT * FROM userartist WHERE UserName='$UserName'";
    $result =mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "User not found.";
    }
}


function checkCurrentPass($CurrentPass ,$UserName) {
    $con = getConnection();
    $sql = "SELECT * FROM userartist WHERE Password='$CurrentPass' AND UserName='$UserName'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function CurrentPassUpdate($UpdatePass,$UserName) {
    $con = getConnection();
    $sql = "UPDATE userartist SET Password='$UpdatePass' WHERE  UserName='$UserName'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}





?>

