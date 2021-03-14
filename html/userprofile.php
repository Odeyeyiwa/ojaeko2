	<?php 
		include('Customer.php');
		$obj= new Customer;
		if (!isset($_SESSION['id'])) {
		header('location:login.php');
		}

    include('Admin.php');
      $adminobj= new Admin;
      $check= $adminobj->getCategory();
		include ('header2.php');
			?>

	
	<body>

   <div class="d-flex bg-light" id="wrapper">
   			
		      <div class="list-group list-group-flush border-right border-top border-left border-bottom mt-4 bg-white"><hr>

		      	<a href="userprofile.php" class="list-group-item list-group-item-action bg-white"><h3>Dashboard</h3></a>
		        <a href="customerdetails.php" class="list-group-item list-group-item-action bg-white"><h3>My Profile</h3></a>
		        <a href="" class="list-group-item list-group-item-action bg-white" data-toggle="modal" data-target="#staticBackdropp"><h3>Upload Products</h3></a>
            <a href="uploadproduct.php" class="list-group-item list-group-item-action bg-white"><h3>Customer Products</h3></a>
		        <a href="customerorder.php" class="list-group-item list-group-item-action bg-white"><h3>Customer Orders</h3></a>
		        <a href="logout.php" class="list-group-item list-group-item-action bg-white"><h3>Logout</h3></a>
		      </div>
   
      <div class="col bg-white ml-5 mt-4">
        <div class="row">
      <div class="col-md-12 offset-2 mt-4 pt-4">
          <div class="card mb-3" style="max-width: 570px;">
            <div class="row g-0 bg-light">
              <div class="col-md-4">
                <img src="../images/user2.png" class="img-fluid">
                <h5><?php echo $_SESSION['fname']; ?></h5>
                <p><?php echo $_SESSION['email']; ?></p>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                   <h3 class="mt-4 card-title">Welcome back, <?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></h3>
                  <p class="card-text">This is a wider card with supporting</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="card-footer bg-light"><a href="products.php" class="text-dark"><h5 class="fa fa-cart-arrow-down"> Start Shopping</h5></a></div>
          </div>
      </div>
    </div>
      </div>

    <!-- Modal -->
<div class="modal fade" id="staticBackdropp" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">ADD NEW PRODUCT</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="addproduct.php" method="POST" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="prodname" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Product Name:</label>
              <div class="col-md-7 col-12">
                <input type="text" name="prodname" class="form-control" id="pname">
              </div>
          </div>
          <div class="form-group row">
            <label for="prodprice" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Product Price:</label>
              <div class="col-md-7 col-12">
                &#8358; <input type="number" name="prodprice" class="form-control" id="pprice">
              </div>
          </div>
          <div class="form-group row">
            <label for="prodqty" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Product Quantity:</label>
              <div class="col-md-7 col-12">
                <input type="number" name="prodqty" class="form-control" id="pqty">
              </div>
          </div>
          <div class="form-group row">
            <label for="prodcat" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Product Category:</label>
            <div class="col-md-7 col-12">
                <select class="form-control" name="prodcat" id="pcat">
              <option value="">Select Category</option>
               <?php foreach ($check as $key=>$value) { ?>
              <option value="<?php echo $value['category_id']; ?>"><?php echo $value['category_name']; ?></option>
            <?php }  ?>
            </select>
              </div>
          </div> 
          <div class="form-group row">
            <label for="uploadprod" class="col-md-3 col-12 font-weight-bold" style="text-align: center;">Upload Product</label>
              <div class="col-md-7 col-12">
                <input type="file" name="productpic">
              </div>
          </div>
      </div>
    

       <div class="modal-footer justify-content-center" style="border-top: none;">
       	<button class="btn btn-success col-md-3" id="add">ADD</button>
       	<!-- <a href="addproduct.php" class="btn btn-success col-md-3">ADD</a> -->
      </div>
      </form>
      <div id="loc"></div>
    	
			<script src="../js/jquery-3.5.1.min.js"></script>
			<script src="../js/popper.min.js"></script>
			<script src="../js/bootstrap.js"></script>

			<script type="">
				$(document).ready(function(){
          
				})
			</script>

	</body>
	</html>