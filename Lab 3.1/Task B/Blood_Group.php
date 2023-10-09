<html>

<head>
    <tittle> </tittle>
</head>


<body>
        
    <form method="post"action=""enctype="">

        <fieldset>


                <legend><h2>Blood_Group</h2></legend>
                <select name="BG">
                    <option value="">A+</option>            
                    <option value="">B+</option>
                    <option value="">A-</option>
                    <option value="">B-</option>         
                    <option value="">AB+</option> 
                    <option value="">o+</option> 
                    <option value="">o-</option>           
                </select> <br> <br>

                <input type="submit"name="Submit " value="Submit"/>
        </fieldset>

    </from>

    

<?php

$Blood_Group=$_REQUEST['BG'];

echo $Blood_Group;


?>

</body>

</html>
