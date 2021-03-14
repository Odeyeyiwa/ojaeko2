			<?php 
				include ('header.php');
			 ?>
			<div class="row">
				<div class="col">
					<h3 align="center" class="py-3 alert alert-info text-white">ADMIN REGISTRATION</h3>
					<?php 
      				if (isset($_GET['msg'])){
        			echo "<div class=\"alert alert-danger text-center\"><h3>".$_GET['msg']."</h3></div>";
     				 }
       				?>

				<form class="form-horizontal" action="adminreg.php" method="POST">
					<div class="form-group row">
						<label for="fname" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Name:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="fname" class="form-control" placeholder="Full Name" required>
							</div>
					</div>
					<div class="form-group row">
							<label for="mail" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Email:</label>
							<div class="col-md-7 col-12">
								<input type="text" name="email" class="form-control" placeholder="E-mail" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="number" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Phone Number:</label>
							<div class="col-md-7 col-12">
								+234 <input type="number" name="phone" class="form-control" placeholder="Phone Number" required>
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
							<span  style="text-align: left;">Already have an account? <a href="adminlogin.php" class="text-info">LOGIN</a></span>
						</div>
					</div>
						<div class="form-group row">
							<div class="col-3 offset-5">
								<button class="btn btn-info">SUBMIT</button>
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