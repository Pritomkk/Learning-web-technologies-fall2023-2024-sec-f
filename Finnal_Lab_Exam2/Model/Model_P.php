<?php
 require_once('db.php');


function Insert_P($Name,  $P,$Q,$Email)
{
    $con = getConnection();
    $insertQuery = "INSERT INTO product (P_name,Price,quantity,Email) 
                        VALUES ('$Name', '$P', '$Q','$Email')"; 

    $insertResult = mysqli_query($con, $insertQuery);

        if ($insertResult) 
        {
            return true;
        } else {
            return false;
        }
    }


function displayProductInformation()
{
    $con = getConnection();
    $sql = "SELECT * FROM product ";
    $result = mysqli_query($con, $sql);

    $rows = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;  
    }

    return $rows;
}












?>