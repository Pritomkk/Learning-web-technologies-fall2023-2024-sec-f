<html>

<head>
    <tittle> </tittle>
</head>


<body>
        
    <form method="post"action=" "enctype="">

        <fieldset>


                <legend><h2>DATE_OF_BIRTH</h2></legend>
                <input type="date" name="dob" value="" /> <br>
                <input type="submit"name="Submit " value="Submit">

        </fieldset>

    </from>


    <?php

    $dob=$_REQUEST['dob'];
    echo $dob;


?>

</body>

</html>

