<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     $email="";
     $e="";
     
     
     if (isset($_POST["submit"])) 

     {
        if (empty($_POST["email"])) 
        {
            $e= "Email is required";
        } else 
        {
            $email =($_POST["email"]);
            echo "my email is $email";
        }
    
     }

    ?>

        <form method="post" action=" ">
                        <fieldset>
                            <legend align="center"><h2>email</h2></legend>
                            Email:
                            <input type="email" name="email" value="<?php echo $email; ?>" /><br>
                            <?php echo $e; ?><hr>
                            <input type="submit" name="submit" value="Submit"/>
                        </fieldset>
        </from>
</body>
</html>

