<html>

<head>
    <tittle> </tittle>
</head>


<body>
        
    <form method="post"action=""enctype="">
        <fieldset>

            <legend><h2>Degree</h2></legend>
            <input type="checkbox" name="degree1" value="SSC">SSC<br>
            <input type="checkbox" name="degree2" value="HSC"> HSC <br>
            <input type="checkbox" name="degree3" value="BSC"> BSC <br>
            <input type="checkbox" name="degree4" value="MSC"> MSC<br>
            <input type="submit"   name="Submit" value="Submit" />


        </fieldset>


    </from>

</body>
<?php

$a=$_REQUEST['degree1'];
$b=$_REQUEST['degree2'];
$c=$_REQUEST['degree3'];
$d=$_REQUEST['degree4'];

echo $a;
echo $b;
echo $c;
echo $d;


?>

</html>