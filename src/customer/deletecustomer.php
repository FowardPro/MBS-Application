<?php

include 'conn.php';

$id = $_GET['ID'];

$q = " DELETE FROM customer WHERE ID = $id ";

mysqli_query($con, $q);

header('location:viewcustomer.php');

?>