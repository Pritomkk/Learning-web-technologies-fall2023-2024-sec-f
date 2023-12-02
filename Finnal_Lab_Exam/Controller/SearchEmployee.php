<?php
require_once('../Model/EmployeModel.php');

if (isset($_POST['info'])) {
    $searchQuery = $_POST['info'];
    $search =  SearchEmployeer($searchQuery); 

    foreach ($search as $result) {
        echo "<p>{$result['employe_Name']} ";
    }
}
?>
