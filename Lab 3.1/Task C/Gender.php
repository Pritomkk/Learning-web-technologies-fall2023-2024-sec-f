<?php
$gender= "";
$g="";

if (isset($_REQUEST["submit"])) 
{
    
    if (empty($_POST["gender"])) {
        $g = "Gender is required";
    } 
    else {
        $gender =($_POST["gender"]);
        echo $gender;
    }
}
 ?>

<html>
<head>
    <title>Registration</title>
</head>
<body>
        <form method="post" action="" enctype=" ">
                
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
                <input type="submit" name="submit" value="Submit"/>
        
        </form>
</body>
</html>