<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     $name="";
     $n="";
     
     
     if (isset($_POST["submit"])) 

     {
        if (empty($_POST["name"])) 
        {
            $n= "name is required";
        } else 
        {
            $name =($_POST["name"]);
            echo "my name is $name";
        }
    
     }

    ?>

        <form method="post" action=" ">
                        <fieldset>
                            <legend align="center"><h2>Name</h2></legend>
                            Name:
                            <input type="text" name="name" value="<?php echo $name; ?>" /><br>
                            <?php echo $n; ?><hr>
                            <input type="submit" name="submit" value="Submit"/>
                        </fieldset>
        </from>
</body>
</html>

