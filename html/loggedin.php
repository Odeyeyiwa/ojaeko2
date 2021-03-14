<?php 
include('Customer.php'); 
$userobj = new Customer;

if ($_POST) {
	$email= trim(strip_tags($_POST['email']));
	$password= strip_tags($_POST['password']);

$customer_info= $userobj->login($email,$password);
	
	if ($customer_info > 0) {
			$_SESSION['id'] = $customer_info['id'];
			$_SESSION['fname'] = $customer_info['fname'];
			$_SESSION['lname'] = $customer_info['lname'];
			$_SESSION['email'] = $customer_info['email'];
			$_SESSION['phone'] = $customer_info['phone'];
			$_SESSION['gender'] = $customer_info['gender'];
			$_SESSION['address'] = $customer_info['address'];
	
		header("location:userprofile.php");
	}else{
		header("location:login.php?msg= INVALID LOGIN DETAILS, PLEASE TRY AGAIN");
	}
}else{
header("location:index.php");
}
 ?>