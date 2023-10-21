<?php
include_once('Header.html');
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
    <?php

$n = $e = $u = $p = $c = $g = $d = "";

$name = isset($_POST["name1"]) ? $_POST["name1"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$userName = isset($_POST["name"]) ? $_POST["name"] : "";
$password = isset($_POST["pass"]) ? $_POST["pass"] : "";
$confirmPassword = isset($_POST["cPass"]) ? $_POST["cPass"] : "";
$gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
$dateOfBirth = isset($_POST["dob"]) ? $_POST["dob"] : "";

$allFieldsFilled = !empty($name) && !empty($email) && !empty($userName) && !empty($password) && !empty($confirmPassword) && !empty($gender) && !empty($dateOfBirth);
session_start();
if (isset($_POST["submit"])) {


    if (!$allFieldsFilled) {
        echo "Please fill in all fields before submitting the form.";
        if (empty($name)) {
            $n = "Name is required";
        }

        if (empty($email)) {
            $e = "Email is required";
        }
        if (empty($userName)) {
            $u = "User Name is required";
        }
        else
        {
            $_SESSION["name"] = $userName;
        }
        if (empty($password)) {
            $p = "Password is required";
        }
        {
            $_SESSION["password"] = $password;
        }
        if (empty($confirmPassword)) {
            $c = "Confirm Password is required";
        } else {
            if ($password !== $confirmPassword) {
                $c = "Confirm Password and Password do not match";
            }
        }
        if (empty($gender)) {
            $g = "Gender is required";
        }
        if (empty($dateOfBirth)) {
            $d = "Date of Birth is required";
        }
    } 

        header('location: ../view/LOGIN.php'); 
      
}

?>
    <table width="100%" height="550" align="center">
        <tr>
            <td align="center">
                <main>
                    <form method="post" action="REGISTRATION.PHP">
                        <fieldset>
                            <legend align="center"><h2>Registration</h2></legend>
                            Name:
                            <input type="text" name="name1" value="<?php echo $name; ?>" />
                            <?php echo $n; ?><hr>
                            E-mail:
                            <input type="text" name="email" value="<?php echo $email; ?>" />
                            <?php echo $e; ?><hr>
                            User Name:
                            <input type="text" name="name" value="<?php echo $userName; ?>" />
                            <?php echo $u; ?><hr>
                            Password:
                            <input type="password" name="pass" value="<?php echo $password; ?>" />
                            <?php echo $p; ?><hr>
                            Confirm Password:
                            <input type="password" name="cPass" value="<?php echo $confirmPassword; ?>" />
                            <b><?php echo $c; ?></b><hr>
                            <fieldset>
                                <legend align="center">Gender</legend>
                                <input type="radio" id="male" name="gender" <?php if ($gender === "male") echo "checked"; ?> value="male">
                                Male
                                <input type="radio" id="female" name="gender" <?php if ($gender === "female") echo "checked"; ?> value="female">
                                Female
                                <input type="radio" id="other" name="gender" <?php if ($gender === "other") echo "checked"; ?> value="other">
                                Other
                                <?php echo $g; ?><hr>
                            </fieldset>
                            <hr>
                            <fieldset>
                                <legend align="center">Date of Birth:</legend>
                                <input type="date" name="dob" value="<?php echo $dateOfBirth; ?>" />
                                <?php echo $d; ?><hr>
                            </fieldset>
                            <hr>
                            <input type="submit" name="submit" value="Submit"/>
                            <input type="reset" name="reset" value="Reset"/><br />
                        </fieldset>
                    </form>
                </main>
            </td>
        </tr>
    </table>
</body>
</html>

<?php

include_once('Footer.Html');

?>
