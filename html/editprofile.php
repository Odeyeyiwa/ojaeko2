<?php
session_start();
	include ('header2.php');
	
?>

	<div class="row">
				<div class="col">
					<h3 align="center" class="py-3 alert alert-info text-white">EDIT PROFILE</h3>

				<form class="form-horizontal" action="sumbitprofile.php" method="POST">
					<div class="form-group row">
						<label for="fname" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">First Name:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="fname" class="form-control" value="<?php echo $_SESSION['fname']?>" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="lname" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Last Name:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="lname" class="form-control" value="<?php echo $_SESSION['lname']?>" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="mail" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Email:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="email" class="form-control" value="<?php echo $_SESSION['email']?>" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="number" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Phone Number:</label>
							<div class="col-md-7 col-12">
								+234 <input type="number" name="phone" class="form-control" value="<?php echo $_SESSION['phone']?>" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="number" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Gender:</label>
							<div class="col-md-7 col-12">
								<input type="radio" name="gender" value="f" required
								 <?php 
								 if ($_SESSION['gender']=='f') {?>
									checked=""
								<?php
								;}
								?>
								> Female
								<input type="radio" name="gender" value="m" required
								 <?php 
								 if ($_SESSION['gender']=='m') {?>
									checked=""
								<?php
								;}
								?>
								> Male
							</div>
					</div>
					<div class="form-group row">
						<label for="address" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Address:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="address" class="form-control" value="<?php echo $_SESSION['address']?>" required>
							</div>
					</div>
						<div class="form-group row">
							<div class="col-4 offset-5">
								<button class="btn btn-outline-info">Save changes</button>
							</div>
						</div>
						</form>
					</div>	
			
				</div>
<?php 
  include ('footer.php');
 ?>