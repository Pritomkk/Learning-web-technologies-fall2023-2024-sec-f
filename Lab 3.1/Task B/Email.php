<html>

<head>
    <tittle> </tittle>
</head>


<body>
        
    <form method="post"action=" "enctype="">

        <fieldset>


                <legend><h2>Email</h2></legend>
                <input type="email" name="Email"   value=""/> <br><br>
                <input type="submit"name="Submit " value="Submit">

        </fieldset>

    </from>
    

    <?php

        $Email=$_REQUEST['Email'];
        echo $Email;


    ?>

</body>

</html>









