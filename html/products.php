				<?php 
					include ('header.php');
					include ('Customer.php');
					$obj= new Customer;
					$check= $obj->getProducts();

			 	?>
				<div>
					<h3 class="alert alert-info" style="text-align: center">ALL PRODUCTS</h3>
				</div>
				<!-- <div class="row">
						<div class="card col-lg-2">
						  <img src="images/male2.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">Shirt</h5>
						    <p class="card-text">#7000</p>
						    
						  </div>
						</div>
				</div> -->
				<div class="row pb-0 mb-0">
			          <?php foreach ($check as $value) { ?>
			        <div class="card col-lg-2 m-3 zoom" style="width: 16rem;">
			          <img src="<?php echo "../uploads/".$value['productpicture']; ?>" class="card-img-top img-fluid" alt="...">  
			          <div class="card-body text-secondary">
			                <h4 class="card-text text-dark"><?php echo $value['productname']; ?></h4>
			                <h5 class="card-text">Price: &#8358 <?php echo number_format($value['productprice']); ?></h5>
			                 <h5 class="card-text"> Vendor: <?php echo$value['store_name']; ?></h5>
			                <h5 class="card-text pb-4"><?php echo $value['category_name']; ?></h5>
			                <a href="#" class="btn btn-primary btn-block">Add To Cart  <i class="fa fa-cart-arrow-down"></i></a>
			          </div><br>
			        </div>
			        <?php }  ?>
			        </div>
				<div class="mt-4">
					<a href="#nav" class="text-dark offset-5"> Back to the top</a>
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
			<!--<script src="js/eko.js"></script>-->

			<script type="">
				$(document).ready(function(){
					
				})
			</script>

	</body>
	</html>