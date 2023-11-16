<?php
 require_once('db.php');

 function loginAdmin($email, $password) {
    $con = getConnection();
    $sql = "SELECT * FROM admin WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function signupAdmin($FirstName, $LastName, $UserName, $Email, $Password, $Dob, $Gender, $Phone, $Joiningdob, $Usertype, $ProfilePicture)
{
    $con = getConnection();
    $sql = "SELECT * FROM admin WHERE UserName ='$UserName' OR Email = '$Email'";
    $checkResult = mysqli_query($con, $sql);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<b><center>Email or username already exists</center></b>";
        return false;
    } else 
    {   
        $insertQuery = "INSERT INTO admin (FirstName, LastName, UserName, Email, Password, DateofBirth, Gender, PhoneNumber, JoiningDate, Usertype, ProfilePicture) 
                        VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password', '$Dob', '$Gender', '$Phone', '$Joiningdob', '$Usertype', '$ProfilePicture')";

        $insertResult = mysqli_query($con, $insertQuery);


        if ($insertResult) {
            return true;
        } else {
            return false;
        }
    }
}



 function CheckAdmin($email, $UserName) {
    $con = getConnection();
    $sql = "SELECT * FROM admin WHERE Email='$email' AND UserName='$UserName'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function updatepasswordAdmin($email,$UserName,$password)
{
    $con = getConnection();
    $sql = $updateSql = "UPDATE admin SET Password='$password' WHERE Email='$email' AND UserName='$UserName'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }

}

function displayUserDataAdmin($UserName) 
{

    $con = getConnection();
    $sql = "SELECT * FROM admin WHERE UserName='$UserName'";
    $result =mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row;
    } else {
        echo "User not found.";
    }
}
function displayUserInformation($Usertype) 
{
    $con = getConnection();
    $sql = "SELECT * FROM userartist WHERE UserType='$Usertype'";
    $result = mysqli_query($con, $sql);

    $rows = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;  
    }

    return $rows;
}

function deleteUserArtist($UserName) 
{   
    $con = getConnection();
    $sql = "SELECT * FROM userartist WHERE UserName = '$UserName'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        $deleteUserQuery = "DELETE FROM userartist WHERE UserName = '$UserName'";
        $Delete = mysqli_query($con, $deleteUserQuery);

        if ($Delete) 
        {
            return true;
        } 
        else 
        {
            return false;
        }
    } 
    else 
    {
        echo "<b><center>No Data</center></b>";
        return false;
    }
}

function checkAdminCurrentPass($CurrentPass ,$UserName) {
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

function CurrentAdminPassUpdate($UpdatePass,$UserName) {
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