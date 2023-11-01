
<?php
require_once('../Model/Model.php');

$n = $i = $u = $p = $c = "";
$name = $id = $Password = $confirmPassword = "";
$allFieldsFilled = false;

if (isset($_POST['submit'])) {
    $Usertype = isset($_POST['user_role']) ? $_POST['user_role'] : '';

    if (empty($_POST["id"])) {
        $i = "Id is required";
    } else {
        $id = $_POST["id"];
    }

    if (empty($_POST["Name"])) {
        $n = "Name is required";
    } else {
        $name = $_POST["Name"];
    }

    if (empty($_POST["Password"])) {
        $p = "Password is required";
    } else {
        $Password = $_POST["Password"];
        if (strlen($Password) < 8) {
            $p = "Password must be at least 8 characters long.";
        } else {
            $specialCharacters = ['@', '#', '$', '%'];
            $containsSpecialChar = false;
            foreach ($specialCharacters as $char) {
                if (strpos($Password, $char) !== false) {
                    $containsSpecialChar = true;
                    break;
                }
            }
            if (!$containsSpecialChar) {
                $p = "Password must contain at least one of the special characters (@, #, $, %).";
            }
        }
    }

    if (empty($_POST["cPass"])) {
        $c = "Confirm Password is required";
    } else {
        $confirmPassword = $_POST["cPass"];
        if ($confirmPassword !== $Password) {
            $c = "Confirm Password must match the password";
        }
    }

    $allFieldsFilled = !empty($name) && !empty($id) && !empty($Password) && !empty($confirmPassword) && !empty($Usertype);

    if ($allFieldsFilled) {
        if (signup($name, $id, $Password, $Usertype)) {
            header("Location: ../View/login.html");
            exit();
        } else {
            echo "Registration failed.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<center>
<form method="post" action=" ">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset >
				   <legend><h3>REGISTRATION</h3></legend>
					Id:
					<br/><input type="text" name="id" value="<?php echo $id; ?> "><br/>
					<b><?php echo $i; ?></b><hr>	

					Password:
                    <br/> <input type="password" name="Password" value="<?php echo $Password; ?>" /><br><br>
                    <b><?php echo $p; ?> </b><hr>
                            
                    Confirm Password:
                     <br/> <input type="password" name="cPass" value="<?php echo $confirmPassword; ?>" /><br><br>
                    <b><?php echo $c; ?> </b> <hr>

					
					Name:
                    <br/><input type="text" name="Name" value="<?php echo $name; ?>" /> <br> <br>
                    <b><?php echo $n; ?></b><hr>	
				
					User Type:
					<br/>
					<input type="radio" name="user_role" value="User" >User
        			<input type="radio" name="user_role" value="Admin">Admin<br>
					<hr/>
					<input type="submit" name="submit" value="Sign Up">
					<a href="../View/login.html">Sign In</a>
				</fieldset>
			</td>
		</tr>                                
	</table>
</form>
</center>
	
</body>
</html>
		