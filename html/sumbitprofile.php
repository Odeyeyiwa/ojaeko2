<?php
	include('Customer.php');
$newcusobj = new Customer;

if ($_POST) {
	if (!isset($_SESSION['id'])) {
	header("location:index.php");}

			
	$updt=$newcusobj->editProfile($_POST,$_SESSION['id']);
			$_SESSION['fname'] = $_POST['fname'];
			$_SESSION['lname'] = $_POST['lname'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['phone'] = $_POST['phone'];
			$_SESSION['gender'] = $_POST['gender'];
			$_SESSION['address'] = $_POST['address'];
	header("location:editprofile.php");
	
}else{
	header("location:index.php");
}
?>