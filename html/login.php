			<?php 
				include ('header.php');
			 ?>
			<div class="row">
					<div class="col-6 offset-3 bg-light pt-4 mt-5" style="text-align: center; border: 10px solid white;">
						<img src="../images/logo2.jpg">
						<h2 style="font-family: arial"; class="alert alert-info text-white alert-sm" >LOGIN</h2>
				<form class="form-horizontal mt-5" action="loggedin.php" method="POST">
					<div class="form-group row">
						<label for="name" class="col-md-3 col-12 mt-4 font-weight-bold" style="text-align: center;">Enter Email:</label>
							<div class="col-md-6 col-12 mt-4">
								<input type="text" name="email" class="form-control" id="name" required>
							</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-md-3 col-12 mt-4 font-weight-bold" style="text-align: center;">Enter Password:</label>
							<div class="col-md-6 col-12 mt-4">
							<input type="password" name="password" class="form-control" id="password" required >
							</div>
					</div>
					<div class="row">
						<div class="col text-left ml-5">
							<input type="checkbox" name="yes"><span> Remember Me</span>
						</div>
						<div class="col text-right mr-5">
							<a href="#"><span>Forgot Password?</span></a>
						</div>
					</div>
					<div class="form-group row">
							<div class="col-4 offset-4 mt-5">
								<button class="btn btn-outline-info col-10">Login</button>
							</div>
					</div>
					<div class="row">
						<div class="col">
							<p class="text-center">If you dont have an account? <a href="register.php">Register</a> now.</p>
							<p class="text-center">Sign in as an <a href="adminlogin.php">Admin</a>
						</div>
					</div>
			</form>
				</div>
			</div>
			<br> <br> <br> <br><br> 
				<div class="row bg-dark mt-5">
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