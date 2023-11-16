<?php
require_once('../Controller/SessionCheck.php');
require_once('../Controller/CookieCheck.php');
?>

<?php
    $FirstName=$_SESSION['FirstName'];
    $LastName=$_SESSION['LastName'];
    $UserType=$_SESSION['UserType'];
?>

<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body>

        <header>
           
                <table width="100%">
                    <tr >
                        <td align="left"width="10%" >
                             <a href="../View/User_dashboard.php">
                             <img src="../Asset/logo.png"alt="company logo" width="200" height="50"> 
                            </a>
                        </td>
                        <td align="left">
                        <h2> &nbsp; &nbsp;Van Gogh digital art marketplace</h2>
                        </td>
                        <td align="right">
                             <a href="../View/Show_<?php echo $UserType; ?>Profile.php">
                            <b>Welcome <?php echo $UserType; ?>, <?php echo $FirstName . ' ' . $LastName; ?></b>
                            </a> | &nbsp;
                            <a href="../View/<?php echo $UserType; ?>_dashboard.php">Home</a> | &nbsp;
                            <a href=" # ">About </a>  |&nbsp;
                            <a href=" # ">Contact</a>  |&nbsp;
                            <a href=" # ">FAQ</a>  |&nbsp;
                            <a href="../Controller/Logout.php">Logout</a> 
                        </td>
                
                    </tr>
                </table>
        </header> 
        <hr>

        <table width="100%" height="75%">
            <tr>
                <td>
                <main>
                   
                   <ul type="square">
                               <li> <h2>User Menu<h2> </li>
                                   <ul type="square"> 
                                       <li> <a href=" # ">Top Up</a></li><br>
                                       <li> <a href=" # ">Withdraw</a></li><br>
                                       <li> <a href=" # ">Notification</a></li><br>
                                       <li> <a href=" # ">Trending Artists</a></li><br>
                                       <li> <a href=" # ">Trending Artwork</a></li><br>
                                       <li> <a href=" # ">Artwork Page</a></li><br>
                                       
                                       <li> <a href=" # ">Artist Profie</a></li>
                                       <ul type="square">
                                           <li> <a href=" # ">Edit</a></li><br>
                                       </ul>
                                       
                                       <li> <a href=" # ">Add Artwork</a></li><br>
                                       <li> <a href="../View/changepassword.php">ChangePassword</a></li><br>
                                       <li> <a href="../Controller/Logout.php">Logout</a></li>

                               
                                   <ul>
                                   
                               </li> 
                       </ul>
               </main>
                    
                </td>
            </tr>
        </table>
               

        <footer>
                <hr>

                <p align="center"> Copyright&copy;  2023</p>


        </footer>
    </body>
      
</body>
</html>