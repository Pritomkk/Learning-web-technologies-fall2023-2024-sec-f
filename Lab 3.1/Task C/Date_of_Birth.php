<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     $dob="";
     $d="";
     
     if(isset($_REQUEST['submit']))
     {
        if (empty($_POST["dob"])) {
            $d= "Date of Birth is required";
        } else {
            $dob =($_POST["dob"]);
            echo $dob;
        }
    

     }

?>

        <form method="post" action=" ">
                       
            <fieldset>
                    <legend>Date of Birth:</legend>
                    <input type="date" name="dob" value="<?php echo $dob;?>">
                    <?php echo $d;?><hr>
            </fieldset>
                <hr>
                <input type="submit" name="submit" value="Submit"/>
        </from>
</body>
</html>