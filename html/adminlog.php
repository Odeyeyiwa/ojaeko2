<?php 
include('Admin.php'); 
$adobj = new Admin;

if ($_POST) {
	$email= trim(strip_tags($_POST['email']));
	$password= strip_tags($_POST['password']);

$admin_info= $adobj->login($email,$password);
	
	if ($admin_info > 0) {
			$_SESSION['id'] = $admin_info['id'];
			$_SESSION['fname'] = $admin_info['afname'];
			$_SESSION['email'] = $admin_info['aemail'];
			$_SESSION['phone'] = $admin_info['aphone'];
	
		header("location:two.php");
	}else{
		header("location:adminlogin.php?msg= INVALID LOGIN DETAILS, PLEASE TRY AGAIN");
	}
}else{
header("location:index.php");
}
 ?>