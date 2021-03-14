<?php
include('Customer.php');
$obj= new Customer;
$check= $obj->myProduct($_SESSION['id']);

print_r($check);

?>