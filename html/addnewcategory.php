<?php 
include('Admin.php');
$adminobj = new Admin;
$check= $adminobj->addCategory($_POST['newcat']);

$_SESSION['cartid'] = $_POST['id'];

 ?>