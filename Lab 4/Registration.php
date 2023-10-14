<?php
$name = $email = $un = $pass = $cPass = $gender = $dob = "";
$n = $e= $u = $p = $c = $g = $d = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["name"])) {
        $n = "Name is required";
    } 
    else
     {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $e= "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["un"])) {
        $u = "User Name is required";
    } else {
        $un = test_input($_POST["un"]);
    }

    if (empty($_POST["pass"])) {
        $p= "Password is required";
    } else {
        $pass = test_input($_POST["pass"]);
    }
    if (empty($_POST["cPass"])) {
        $c = "Confirm Password is required";
    } else {
        $cPass = test_input($_POST["cPass"]);
        if ($pass !== $cPass) {
            $c = "Passwords do not match";
        }
    }

    if (empty($_POST["gender"])) {
        $g = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["dob"])) {
        $d= "Date of Birth is required";
    } else {
        $dob = test_input($_POST["dob"]);
    }
    if (empty($n) && empty($e) && empty($u) && empty($p) && empty($c) && empty($g) && empty($d)) {
        $message = "Registration successful!";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
        <form method="post" action="" enctype="">
            <fieldset>
                <legend><h2>Registration</h2></legend>
                Name:
                <input type="text" name="name" value="<?php echo $name;?>">
                <?php echo $n;?><hr>
                E-mail:
                <input type="text" name="email" value="<?php echo $email;?>">
                <?php echo $e;?><hr />
                User Name:
                <?php echo $u;?><hr />
                Password:
                <input type="password" name="pass" value="<?php echo $pass?>"/>
                <?php echo $p;?><hr />
                Confirm Password:
                <input type="password" name="cPass" value="<?php echo $cPass?>"/>
                <?php echo $c;?><hr />
                <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">
                    Male
                    <input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">
                    Female
                    <input type="radio" id="other" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">
                    Other
                    <?php echo $g;?><hr>
                </fieldset>
                <hr>
                <fieldset>
                    <legend>Date of Birth:</legend>
                    <input type="date" name="dob" value="<?php echo $dob;?>">
                    <?php echo $d;?><hr>
                </fieldset>
                <hr>
                <input type="submit" name="submit" value="Submit"/>
                <input type="reset" name="reset" value="Reset"/><br />
            </fieldset>
            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
        </form>
</body>
</html>
