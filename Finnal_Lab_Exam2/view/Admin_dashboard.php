<?php
session_start(); 

if (!isset($_SESSION['Email'])) {
    header('Location:../View/login.php'); 
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>

</head>
<body>
    <h1>Home Page</h1>
    <h2>Welcome Admin, <?php echo $_SESSION['Name']; ?></h2>
    <a href='../view/profile_admin.php'><h3>Admin_Profile</h3></a><br>
    <a href='../view/View_all_user.php'><h3>View User</h3></a><br>
    <a href='../view/Suspend_Seller.php'><h3>Suspend Seller</h3></a><br>
    <a href='../view/Suspend_Buyer.php'><h3>Suspend Buyer</h3></a><br>

    <a href='../Controller/Logout.php'><h3>LogOut</h3></a><br>
   
</body>
</html>