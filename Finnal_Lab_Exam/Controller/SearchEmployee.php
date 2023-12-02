<?php

    require_once('../Model/EmployeModel.php');
    $username = $_REQUEST['person'];
    $std = json_decode($username);
    $search = SearchEmployeer( $std);
    echo json_encode($search);

?>