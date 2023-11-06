<?php
require_once('../Controller/SessionCheck.php');
require_once('../Controller/FunctionCheck.php');
require_once('../Model/model.php');
?>

<html>
<head>
    <title>EditArtistProfile</title>
</head>
<body>

<?php

$FirstName = $LastName = $Email = $Dob = $Gender = $Phone =$Fn=$Ln= "";
$UserName = $_SESSION['UserName'];  

if (isset($_POST['Submit'])) 
{
   

    if (isset($_POST['FirstName'])) 
    {   
        $FirstName = $_POST['FirstName'];
        if (isValidUsername($FirstName)) 
        {
            $Fn="meets the requirement";
        } else {
            $Fn="Name contains alphanumeric characters";
        }
        
    }

    if (isset($_POST['LastName'])) {
        $LastName = $_POST['LastName'];
        if (isValidUsername($LastName)) 
        {
            $Ln="meets the requirement";
        } else {
            $Ln="Name contains alphanumeric characters";
        }
    }

    if (isset($_POST['Email'])) {
        $Email = $_POST['Email'];
    }

    if (isset($_POST['Dob'])) {
        $Dob = $_POST['Dob'];
    }

    if (isset($_POST['Gender'])) {
        $Gender = $_POST['Gender'];
    }

    if (isset($_POST['Phone'])) {
        $Phone = $_POST['Phone'];
    }

    if (editArtistProfile($FirstName, $LastName, $UserName, $Email, $Dob, $Gender, $Phone)) 
    {
       
        header("Location:../View/Artist_dashboard.php");
    } 
    else {
        echo "Edit Failed";
    }
}
?>

   
   <table width="100%" height="550" align="center">
        <tr>
            <td >
                <table align="center"width="50%">
                    <tr>
                        <td>
                            <main>
                            <form method="post" action=" " enctype="multipart/form-data">
                            <fieldset>
                            <legend><h2>EditArtistProfile</h2></legend>
                            First Name:
                            <input type="text" name="FirstName" value="<?php echo $FirstName; ?>" /> <br> <br>
                            <b><?php echo $Fn; ?></b><hr>
                            Last Name:
                            <input type="text" name="LastName" value="<?php echo $LastName; ?>" /> <br> <br>
                            <b><?php echo $Ln; ?></b><hr>
  
                            E-mail:
                            <input type="text" name="Email" value="<?php echo $Email; ?>" /><br><br>
 
                            Date of Birth:
                            <input type="date" name="Dob" value="<?php echo $Dob;?>"><br> <br>                       
                            Gender:
                                <input type="radio" id="male" name="Gender" <?php if ($Gender === "male") echo "checked"; ?> value="male">
                                Male
                                <input type="radio" id="female" name="Gender" <?php if ($Gender === "female") echo "checked"; ?> value="female">
                                Female
                                <input type="radio" id="other" name="Gender" <?php if ($Gender === "other") echo "checked"; ?> value="other">
                                Other <br> <br>

                            PhoneNumber:
                            <input type="text" name="Phone" value="<?php echo $Phone; ?>" /><br><br>
                            <input type="submit" name="Submit" value="Submit"/>
                           
                        </fieldset>
                    </form>
                </main>
                </td>
                </tr>
            </table>
        </td>
    </tr>
    </table>
</body>
</html>

