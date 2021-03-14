			<?php 
				include ('header.php');
			 ?>
			<div class="row">
				<div class="col">
					<h3 align="center" class="py-3 alert alert-info text-white">CREATE AN ACCOUNT</h3>
					<?php 
      				if (isset($_GET['msg'])){
        			echo "<div class=\"alert alert-danger text-center\"><h3>".$_GET['msg']."</h3></div>";
     				 }
       				?>

				<form class="form-horizontal" action="reginfo.php" method="POST">
					<div class="form-group row">
						<label for="fname" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">First Name:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="fname" class="form-control" placeholder="First Name" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="lname" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Last Name:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="mail" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Email:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="email" class="form-control" placeholder="E-mail" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="sname" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Store Name:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="sname" class="form-control" placeholder="Enter Your Store Name" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="number" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Phone Number:</label>
							<div class="col-md-7 col-12">
								+234 <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="number" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Gender:</label>
							<div class="col-md-7 col-12">
								<input type="radio" name="gender" value="f" required> Female
								<input type="radio" name="gender" value="m" required> Male
							</div>
					</div>
					<div class="form-group row">
						<label for="address" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Address:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="address" class="form-control" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-md-3 col-12 font-weight-bold " style="text-align: center;"> State of Residence:</label>
						<div class="col-md-7 col-12"><select name="state" class="form-control">
								<option value="">Please Select</option>
								<option value="Abia">Abia</option>
								<option value="Adamawa">Adamawa</option>
								<option value="Akwa Ibom">Akwa Ibom</option>
								<option value="Anambra">Anambra</option>
								<option value="Bauchi">Bauchi</option>
								<option value="Bayelsa">Bayelsa</option>
								<option value="Benue">Benue</option>
								<option value="Borno">Borno</option>
								<option value="Cross River">Cross River</option>
								<option value="Delta">Delta</option>
								<option value="Ebonyi">Ebonyi</option>
								<option value="Edo">Edo</option>
								<option value="Ekiti">Ekiti</option>
								<option value="Enugu">Enugu</option>
								<option value="Gombe">Gombe</option>
								<option value="Imo">Imo</option>
								<option value="Jigawa">Jigawa</option>
								<option value="Kaduna">Kaduna</option>
								<option value="Kano">Kano</option>
								<option value="Katsina">Katsina</option>
								<option value="Kebbi">Kebbi</option>
								<option value="Kogi">Kogi</option>
								<option value="Kwara">Kwara</option>
								<option value="Lagos">Lagos</option>
								<option value="Nasarawa">Nasarawa</option>
								<option value="Niger">Niger</option>
								<option value="Ogun">Ogun</option>
								<option value="Ondo">Ondo</option>
								<option value="Osun">Osun</option>
								<option value="Oyo">Oyo</option>
								<option value="Plateau">Plateau</option>
								<option value="Rivers">Rivers</option>
								<option value="Sokoto">Sokoto</option>
								<option value="Taraba">Taraba</option>
								<option value="Yobe">Yobe</option>
								<option value="Zamfara">Zamfara</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Password:</label>
							<div class="col-md-7 col-12">
								<input type="Password" name="password" class="form-control" placeholder="Enter Password" required>
							</div>
					</div>
					<div class="form-group row">
						<div class=" col offset-1">
							<span  style="text-align: left;">Already have an account? <a href="login.php" class="text-info">LOGIN</a></span>
						</div>
						<div class=" col offset-1">
							<span style="text-align: right;"> By clicking below you agree to our <a href="terms.php">Terms and Conditions</a>
							</span>
						</div>
					</div>
						<div class="form-group row">
							<div class="col-4 offset-5">
								<button class="btn btn-outline-info">SUBMIT</button>
							</div>
						</div>
						</form>
					</div>	
			
				</div>	
		</div>
				<div class="row bg-dark">
					<div class="col pt-2">
						<p style="text-align: center" class="font-weight-bold text-white">Copyright &copy; All rights reserved | Designed by Odeyeyiwa Omotoyosi 2021</p>
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