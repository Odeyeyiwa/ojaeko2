<?php 
		include('Customer.php');
		$obj= new Customer;
		if (!isset($_SESSION['id'])) {
		header('location:index.php');
		}
		include ('header2.php');
			?>


	<body>

   <div class="d-flex bg-light" id="wrapper">
   			
		      <div class="list-group list-group-flush border-right border-top border-left border-bottom mt-4 bg-white"><hr>
		        <a href="userprofile.php" class="list-group-item list-group-item-action bg-white"><h3>Dashboard</h3></a>
		        <a href="customerdetails.php" class="list-group-item list-group-item-action bg-white"><h3>My Details</h3></a>
		         <a href="uploadproduct.php" class="list-group-item list-group-item-action bg-white"><h3>My Products</h3></a>
		        <a href="customerorder.php" class="list-group-item list-group-item-action bg-white"><h3>Customer Orders</h3></a>
		        <a href="editprofile.php" class="list-group-item list-group-item-action bg-white"><h3>Edit Profile</h3></a>
		        <a href="logout.php" class="list-group-item list-group-item-action bg-white"><h3>Logout</h3></a>
		      </div>
   
    <div id="page-content-wrapper" class="col">
      <div class="bg-white ml-2 col mt-4">
        <h1 class="mt-4 ">Profile Overview</h1>
        <div class="col-md-8 offset-1 bg-white mt-5 mr-2">
					<h3 class="text-center alert alert-info">My Details</h3><hr>
					<table class="table table-dark table-hover ">
						<tr>
							<th>First Name:</th><td> <?php echo $_SESSION['fname'];?> </td>
						</tr>
						<tr>
							<th>Last Name:</th><td> <?php echo $_SESSION['lname'];?> </td>
						</tr>
						<tr>
							<th>Email:</th><td> <?php echo $_SESSION['email'];?> </td>
						</tr>
						<tr>
							<th>Phone No:</th><td> <?php echo $_SESSION['phone'];?> </td>
						</tr>
						<tr>
							<th>Gender:</th><td> <?php echo $_SESSION['gender'];?> </td>
						</tr>
						<tr>
							<th>Address:</th><td> <?php echo $_SESSION['address'];?> </td>
						</tr>
					</table>
					<a href="editprofile.php" class="btn btn-dark">Edit Profile</a>
				</div>
      </div>
    </div>

  </div>

			
		</div>	
			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.js"></script>

			<script type="">
				$(document).ready(function(){

				})
			</script>

	</body>
	</html>

				
