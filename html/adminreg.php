<?php 
include('Admin.php');


$newobj = new Admin;

$fullname= trim(strip_tags($_POST['fname']));
$email= trim(strip_tags($_POST['email']));
$phone= trim(strip_tags($_POST['phone']));
$password= strip_tags($_POST['password']);


$check=$newobj-> register($fullname,$email,$phone,$password); 

if ($check>0) {
	$_SESSION['admin_id']= $check;
	header("location:adminlogin.php");

}else{
	header("location:adminregister.php?msg=ERROR, TRY AGAIN!!!");
}

 ?>