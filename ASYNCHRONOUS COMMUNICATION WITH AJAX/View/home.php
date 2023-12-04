<?php
session_start(); 

if (!isset($_SESSION['Email'])) {
    header('Location: login.php'); 
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
    <h2>Welcome, <?php echo $_SESSION['Name']; ?></h2>
    <p>Email: <?php echo $_SESSION['Email']; ?></p>
    <p>Phone: <?php echo $_SESSION['Phone']; ?></p>
</body>
</html>
