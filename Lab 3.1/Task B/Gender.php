
<html>

<head>
    <tittle> </tittle>
</head>


<body>
        
    <form method="post"action=" "enctype="">

        <fieldset>


                <legend><h2>Gender</h2></legend>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other">Other <br><br>
                <input type="submit"name="Submit " value="Submit">

        </fieldset>

    </from>

    <?php

    $gender=$_REQUEST['gender'];
    echo $gender;


    ?>

</body>

</html>




