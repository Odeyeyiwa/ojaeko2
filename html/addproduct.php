<?php 
	include "Customer.php";
	$customerobj = new Customer;

	$pname = strip_tags(trim($_POST['prodname']));
	$pprice = strip_tags(trim($_POST['prodprice']));
	$pqty = strip_tags(trim($_POST['prodqty']));
	$pcart = strip_tags(trim($_POST['prodcat']));

	$checker= $customerobj->addProduct($pname,$pprice,$pqty,$pcart,$_FILES,$_SESSION['id']);
	header('location: uploadproduct.php');
 ?>