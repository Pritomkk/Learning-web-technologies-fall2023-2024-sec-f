<?php
require_once('../Model/Model_P.php');

if (isset($_POST['submit'])) {
    $Name = $_POST["name"];
    $P = $_POST["P"];
    $Q = $_POST["Q"];
    $Email=$_POST['Email'];

    if (Insert_P($Name,$P,$Q,$Email)) 
    {
        echo "Sucess Added ";
       
    } else {
        echo "<center> failed.</center>";
    }
}
?>