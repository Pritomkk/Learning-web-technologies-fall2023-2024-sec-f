<?php

require_once("../Model/db.php")

function EmployeLogin($username, $password)
{
    $con = getConnection();
    $sql = "select * from employe_info where username='{$username}'and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $row= mysqli_num_rows($result);

    if($row>0){

        $Emp = mysqli_fetch_assoc($row);
        if ($Emp)
        {
            $name = $Emp['Name'];
            $username =$Emp['Username'];
            setcookie('Name', $name, time() + 5000, '/');
            setcookie('Username', $username, time() + 5000, '/');
        }         
        return true;
    }
    else{
        return false;
    }
}
function signupEmploye($employe_Name,$company_Name,$Number,$userName,$password )
{
    $con = getConnection();
    $sql = "SELECT * FROM employe_info WHERE UserName ='$userName' ";
    $checkResult = mysqli_query($con, $sql);

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<b><center>username already exists</center></b>";
        return false;
    } else 
    {   
        $insertQuery = "INSERT INTO employe_info(employe_Name, company_Name,contact_Num, user_name, password) 
                        VALUES ('$employe_Name', '$company_Name', '$Number', '$userName', '$password')";

        $insertResult = mysqli_query($con, $insertQuery);


        if ($insertResult) {
            return true;
        } else {
            return false;
        }
    }
}


function updateEmployer($name, $username,$companyName,$contactNum,$password)
{
        $con = getConnection();
        $updates = array();
    
        if (!empty($name)) {
            $updates[] = "employe_Name= '$Name'";
        }
    
    
        if (!empty($UserName)) {
            $updates[] = "UserName= '$username'";
        }
    
        if (!empty($Gender)) {
            $updates[] = "company_Name = '$companyName'";
        }
    
        if (!empty($Phone)) {
            $updates[] = "contact_Num = '$contactNum'";
        }
        if (!empty($Phone)) {
            $updates[] = "	password = '$password'";
        }
        if (empty($updates)) {
           
            return false;
        }
    
    
        $updateQuery = "UPDATE employe_info SET " . implode(', ', $updates) . " WHERE UserName = '$username'";
        $updateResult = mysqli_query($con, $updateQuery);
    
        if ($updateResult) {
            return true; 
        } else {
            return false;
        }
}
    

function SearchEmployeer($username)
{

        $con = getConnection();
        $sql = "select * from employe_info where UserName='$username' ";
        $result = mysqli_query($con, $sql);
    
        $user = mysqli_fetch_assoc($result);
    

    }



?>