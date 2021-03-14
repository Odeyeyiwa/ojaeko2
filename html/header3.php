			<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Oja Eko | E-commerce and Logistics</title>
			<meta name="keyword" content="">
			<meta name="description" content="">
			<meta name="author" content="">
			<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
				<style type="text/css">
					.content:hover{
						border:1px solid #ccc;
						border-radius:5px;
					}
					
				</style>
				<link rel="stylesheet" type="text/css" href="../animate.css">
				<link rel="stylesheet" type="text/css" href="../bootstrap.css">
				<link rel="stylesheet" type="text/css" href="../icons/css/all.css">
	</head>
	<body>
		<div class="container-fluid bg-light" style="box-sizing: border-box;">
			<div class="row top sticky-top">
				<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
					  <div class="container-fluid">
					   <a class="navbar-brand" href="two.php"><img src="../images/logo2.jpg"></a>
					    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-icon"></span>
					    </button>
					    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    	 <form class="d-flex col-7">
					    	 <input class="form-control me-2" type="search" placeholder="Search Products " aria-label="Search">
					        <button class="btn btn-outline-info ml-1" type="submit">Search</button>
					      </form>
					     
					      <ul class="navbar-nav me-auto mb-2 mb-lg-0 offset-1">
					        <li class="nav-item dropdown">
					          <a class="nav-link dropdown active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
					            <i class="fa fa-user"></i>
					          </a>
					          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					            <li><a class="dropdown-item" href="login.php">Login</a></li>
					            <li><hr class="dropdown-divider"></li>
					            <li><a class="dropdown-item" href="register.php">Register</a></li>
					            <li><hr class="dropdown-divider"></li>
					            <li><a class="dropdown-item" href="two.php">Profile</a></li>
					        	<li><hr class="dropdown-divider"></li>
					          </ul>
					        </li>
					        <li class="nav-item dropdown">
				              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				                Welcome back , <b><?php echo $_SESSION['fname'];?></b>
				              </a>
				              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
				                <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
				                <a class="dropdown-item" href="logout.php">Logout</a>
				              </div>
				            </li>
					      </ul>
					    </div>
					  </div>
					</nav>
				</div>
			</div>