			<?php 
				include ('header.php');
			 ?>
			<div class="row">
					<div class="col-6 offset-3 bg-white pt-4 mt-5">
						<h2 class="text-dark" style="text-align: center;">YOUR CART</h2>
					<div class="col-6 offset-3">
						<img src="../images/cart3.png" class="img-fluid mt-5 ml-5">
					</div>
					<h5 class="text-dark" style="text-align: center;">You have not added anything to your cart. <a href="login.php">LOGIN</a> or <a href="register.php"> SIGN UP</a> to view your cart</h5><br>
					<a href="products.php" class="btn btn-info offset-5 mb-4">START SHOPPING</a>
				</div>
			</div>


			<div class="container-fluid bg-white pt-4 mt-5">
			<div class="row">
					<div class="col-md-12">
						<h4 class="text-dark text-left" style="text-align: center;">SHOPPING CART</h4><hr>
						<button class="btn btn-outline-danger offset-11 mb-2">Empty Cart</button>
					</div>	
					<div class="col-md-12">
						<table class="table" border="1">
							<tr class="btn-secondary">
								<th>
									Product Name
								</th>
								<th>
									Product Id
								</th>
								<th>
									Product Picture
								</th>
								<th>
									Store Name
								</th>
								<th>
									Quantity
								</th>
								<th>
									Price
								</th>
								<th>
									Remove
								</th>
							</tr>
							<tr>
								<th>
									Zara Shirt
								</th>
								<th>
									15
								</th>
								<th>
									n/a
								</th>
								<th>
									Kaozy Store
								</th>
								<th>
									1
								</th>
								<th>
									&#8358 2,200
								</th>
								<th>
									<button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
								</th>
							</tr>
							<tr>
								<th>
									Zara Shirt
								</th>
								<th>
									9
								</th>
								<th>
									n/a
								</th>
								<th>
									Kaozy Store
								</th>
								<th>
									2
								</th>
								<th>
									&#8358 1,000
								</th>
								<th>
									<button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
								</th>
							</tr>
							<tr>
								<th>
									Zara Shirt
								</th>
								<th>
									85
								</th>
								<th>
									n/a
								</th>
								<th>
									Kaozy Store
								</th>
								<th>
									5
								</th>
								<th>
									&#8358 3,200
								</th>
								<th>
									<button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
								</th>
							</tr>
							<tr>
								<th>
									Zara Shirt
								</th>
								<th>
									22
								</th>
								<th>
									n/a
								</th>
								<th>
									Kaozy Store
								</th>
								<th>
									1
								</th>
								<th>
									&#8358 1,500
								</th>
								<th>
									<button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
								</th>
							</tr>
							<tr>
								<th>
									Zara Shirt
								</th>
								<th>
									34
								</th>
								<th>
									n/a
								</th>
								<th>
									Kaozy Store
								</th>
								<th>
									3
								</th>
								<th>
									&#8358 2,500
								</th>
								<th>
									<button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
								</th>
							</tr>
							<tr>
								<th colspan="4" class="text-right">Total:</th>
								<th>12</th>
								<th colspan="2">&#8358 10,400</th>
							</tr>
						</table>
					</div>

					<div class="container-fluid mt-4">
						<h5 class="text-secondary">Similar Products</h5><hr>
					</div>
					<div class="row ml-5">
						<div class="col-md-4">
						<div class="card m-3 " style="width: 20rem;">
			          		<img src="../images/male5.jpg">
			          	<div class="card-body text-secondary">
			                <h5>Burberry Men's Shirt</h5>
			                <span class="pb-2">&#8358 6,500</span>
			                <input type="number" name="qty" class="mb-2">
			                <a href="#" class="btn btn-info btn-block">Add To Cart  <i class="fa fa-cart-arrow-down"></i></a>
			          	</div><br>
			        	</div>
						</div>

						<div class="col-md-4">
							<div class="col-md-4">
						<div class="card m-3 " style="width: 20rem;">
			          		<img src="../images/male5.jpg">
			          	<div class="card-body text-secondary">
			                <h5>Burberry Men's Shirt</h5>
			                <span class="pb-2">&#8358 6,500</span>
			                <input type="number" name="qty" class="mb-2">
			                <a href="#" class="btn btn-info btn-block">Add To Cart  <i class="fa fa-cart-arrow-down"></i></a>
			          	</div><br>
			        	</div>
						</div>
						</div>
						<div class="col-md-4">
							<div class="col-md-4">
						<div class="card m-3 " style="width: 20rem;">
			          		<img src="../images/male5.jpg">
			          	<div class="card-body text-secondary">
			                <h5>Burberry Men's Shirt</h5>
			                <span class="pb-2">&#8358 6,500</span>
			                <input type="number" name="qty" class="mb-2">
			                <a href="#" class="btn btn-info btn-block">Add To Cart  <i class="fa fa-cart-arrow-down"></i></a>
			          	</div><br>
			        	</div>
						</div>
						</div>
					</div>	
				</div>
				<div class="row">
						<a href="products.php" class="btn btn-info offset-5 mb-4 mt-5"> Continue Shopping <i class="fa fa-cart-arrow-down"></i></a>
					</div>
			</div>
			</div>
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