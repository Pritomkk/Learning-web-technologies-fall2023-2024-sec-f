<?php
require_once('../Controller/SessionCheck.php');
//require_once('../Controller/CookieCheck.php');
?>
<?php
    $FirstName=$_SESSION['FirstName'];
    $LastName=$_SESSION['LastName'];
    $UserType=$_SESSION['UserType']
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <body>
    <header>
    <table width="100%">
        <tr>
            <td align="left" width="10%">
                <a href="../View/<?php echo $UserType; ?>_dashboard.php">
                    <img src="../Asset/logo.png" alt="company logo" width="200" height="50"> 
                </a>
            </td>
            <td align="left">
                <h2>&nbsp; &nbsp;Van Gogh digital art marketplace</h2>
            </td>
            <td align="right">
                <a href="../View/Show_<?php echo $UserType; ?>Profile.php">
                    <b>Welcome <?php echo $UserType; ?>, <?php echo $FirstName . ' ' . $LastName; ?></b>
                </a> | &nbsp;
                <a href="../View/<?php echo $UserType; ?>_dashboard.php">Home</a> | &nbsp;
                <a href="../View/About.php">About</a> | &nbsp;
                <a href="#">Contact</a> | &nbsp;
                <a href="#">FAQ</a> | &nbsp;
                <a href="../Controller/LogoutAdmin.php">Logout</a> 
            </td>
        </tr>
    </table>
</header>

        <hr>
<main>
<center><h1><u>About Us</U></h1> </center>
<table width="100%" height="60%">
    <tr>
        <td align="center">
            <img src="../Asset/dummy450x450.jpg" alt="Profile Picture 1" width="150" height="150">
            <h2>Pritom Chandra Dey</h2>
            <p>Email: designerPritondey@gmail.com</p>
        </td>
        <td align="center">
            <img src="../Asset/dummy450x450.jpg" alt="Profile Picture 2" width="150" height="150">
            <h2>MIRZA SADMAN MEHRAB</h2>
            <p>Email:MEHRAB@gmail.com</p>
        </td>
        <td align="center">
            <img src="../Asset/dummy450x450.jpg" alt="Profile Picture 3" width="150" height="150">
            <h2>RAFID HASSAN RISUN</h2>
            <p>Email: RISUN@gmail.com</p>
        </td>
        <td align="center">
            <img src="../Asset/dummy450x450.jpg" alt="Profile Picture 4" width="150" height="150">
            <h2>AZWAD ISLAM SACHCHA</h2>
            <p>Email: SACHCHA@gmail.com</p>
        </td>
    </tr>
</table>


  
    
</main>              

<footer>
        <hr>

        <p align="center"> Copyright&copy;  2023</p>
        <p align="center">
        <a href="https://www.facebook.com/yourpage" target="_blank"><img src="../Asset/Facebook_Logo_2023.png" alt="Facebook" width="30" height="30"  >&nbsp;&nbsp;Follow us on Facebook</a>|
        <a href="../View/public_home.html" target="_blank"><img src="../Asset/pngtree-vector-web-icon-png-image_555441.jpg" alt="Facebook" width="30" height="30"> &nbsp;&nbsp;Visit our Website</a>
        <br>
        
    </p>
    


</footer>
</body>

</body>
</html>