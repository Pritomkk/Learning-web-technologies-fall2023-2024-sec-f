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
    <h2>Welcome seller, <?php echo $_SESSION['Name']; ?></h2>
    <a href='../View/Profile_seller.php'><h3>Profile</h3></a><br>
    <a href='../View/Add_prodeuct.php'><h3>Add_product</h3></a><br>
    <a href='../Controller/Logout.php'><h3>LogOut</h3></a><br>
   
</body>
</html>