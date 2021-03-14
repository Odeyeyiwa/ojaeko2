<?php
	include('Admin.php');
	$adminobj = new Admin;


	$add= $adminobj->editCategory($_POST['editcat'],$_POST['id']);

 ?>