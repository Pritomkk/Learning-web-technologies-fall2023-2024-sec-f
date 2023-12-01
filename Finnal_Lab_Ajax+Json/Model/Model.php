<?php

require_once('db.php');

function searchInfo($searchQuery)
{
    $con = getConnection();
    $sql = "SELECT * FROM show_info WHERE employe_Name LIKE '%$searchQuery%' OR company_Name LIKE '%$searchQuery%' OR contact_Num LIKE '%$searchQuery%' OR User_name LIKE '%$searchQuery%'";
    $result = mysqli_query($con, $sql);
    $users = [];

    while ($user = mysqli_fetch_assoc($result)) {
        array_push($users, $user);
    }
    return $users;
}
?>
