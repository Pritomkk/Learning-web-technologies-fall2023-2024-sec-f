<?php
 require_once('db.php');

 function login($id, $password) {
    $con = getConnection();
    $sql = "SELECT * FROM useradmin WHERE Id='{$id}' AND Password='{$password}'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        return $row; 
    }

    return null;
}

function signup($name, $id, $Password,$Usertype)
 {
     $con = getConnection();
     $SQL = "SELECT * FROM useradmin WHERE Id = '$id' OR Name = '$name'";
     $checkResult = mysqli_query($con, $SQL);
 
     if (mysqli_num_rows($checkResult) > 0) {
         echo "id or username already exists <br>";
         return false; 
     } else {
         $insertQuery = "INSERT INTO useradmin (Name,Id, Password,User_type) 
         VALUES ('$name', '$id', '$Password','$Usertype')";
         
         $insertResult = mysqli_query($con, $insertQuery);
 
         if ($insertResult) {
             return true;
         } else {
             return false;
         }
     }
 }
 
 function displayUserTable()
 { 
     $con = getConnection();
     $sql = "SELECT ID, Name, UserType FROM useradmin"; 
     $result = mysqli_query($con, $sql);
 
     if (mysqli_num_rows($result) > 0) {
         echo '<center>';
         echo '<table border="1" cellpadding="5" cellspacing="0">';
         echo '<tr><td colspan="3" align="center">Users</td></tr>';
         echo '<tr><td>ID</td><td>NAME</td><td>USER TYPE</td></tr>';
 
         while ($row = mysqli_fetch_assoc($result)) {
             echo '<tr>';
             echo '<td>' . $row["ID"] . '</td>';
             echo '<td>' . $row["Name"] . '</td>';
             echo '<td>' . $row["UserType"] . '</td>';
             echo '</tr>';
         }
 
         echo '<tr><td colspan="3" align="right"><a href="home.html">Go Home</a></td></tr>';
         echo '</table>';
         echo '</center>';
     } else {
         echo "No records found.";
     }
 }


 function displayUserProfile($Id, $password) {
    $user = login($Id, $password); 
    if ($user) {
        echo '<center>';
        echo '<h1>User Profile</h1>';
        echo '<p>ID: ' . $user['ID'] . '</p>';
        echo '<p>Name: ' . $user['Name'] . '</p>';
        echo '<p>User Type: ' . $user['UserType'] . '</p>';
    } else {
        echo "User not found or incorrect password.";
    }
}


function changePassword($user_id, $current_password, $new_password, $confirm_password) {
    $con=getConnection();
    $sql = "SELECT password FROM useradmin WHERE id = '$user_id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($current_password === $row['password']) {
        if ($new_password === $confirm_password) {
            $update_sql = "UPDATE useradmin SET password = '$new_password' WHERE id = '$user_id'";
            if (mysqli_query($con, $update_sql)) {
                return "Password changed successfully.";
            } 
        } 
        else {
            return "New passwords do not match.";
        }
    } 
    else {
        return "Current password is incorrect.";
    }
}

 



 

?>