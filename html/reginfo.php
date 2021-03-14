<?php 
include('Customer.php');

$newobj = new Customer;

// print_r($_POST);
// die();

$fname= trim(strip_tags($_POST['fname']));
$lname= trim(strip_tags($_POST['lname']));
$email= trim(strip_tags($_POST['email']));
$sname= trim(strip_tags($_POST['sname']));
$phone= trim(strip_tags($_POST['phone']));
$gender= trim(strip_tags($_POST['gender']));
$address= trim(strip_tags($_POST['address']));
$password= strip_tags($_POST['password']);


$check=$newobj-> register($fname,$lname,$email,$sname,$phone,$gender,$address,$password); 

if ($check>0) {
	$_SESSION['customer_id']= $check;
	header("location:userprofile.php");

}else{
	header("location:register.php?msg=ERROR, TRY AGAIN!!!");
}
 ?>
