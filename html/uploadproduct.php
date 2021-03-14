<?php
include('Customer.php');
$obj= new Customer;
$check= $obj->myProduct($_SESSION['id']);




if (!isset($_SESSION['id'])) {
 header('location:index.php');
}


include ('header2.php');
?>

      <div class="row">
        <div class="col">
          <h1 class="alert alert-info text-center">UPLOADED PRODUCT</h1>
        </div>
      </div>

       <div class="d-flex bg-light row" id="wrapper">
        
          <div class="list-group list-group-flush border-right border-top border-left border-bottom mt-4 bg-white"><hr>
            <a href="userprofile.php" class="list-group-item list-group-item-action bg-white"><h3>Dashboard</h3></a>
            <a href="customerdetails.php" class="list-group-item list-group-item-action bg-white"><h3>My Details</h3></a>
            <a href="customerproduct.php" class="list-group-item list-group-item-action bg-white"><h3>My Products</h3></a>
            <a href="customerorder.php" class="list-group-item list-group-item-action bg-white"><h3>My Orders</h3></a>
            <a href="editprofile.php" class="list-group-item list-group-item-action bg-white"><h3>Customer Details</h3></a>
            <a href="editprofile.php" class="list-group-item list-group-item-action bg-white"><h3>Edit Profile</h3></a>
            <a href="logout.php" class="list-group-item list-group-item-action bg-white"><h3>Logout</h3></a>
          </div>
   
    <div id="page-content-wrapper" class="col-md-10">
    <!-- <div class="row" id="prod"  >
        <div class="col-md-12"> --> 

          <div class="row mt-4 ml-5">
          <?php foreach ($check as $value) { ?>
        <div class="card col-lg-5 m-1" style="width: 15rem;">
          <img src="<?php echo "../uploads/".$value['productpicture']; ?>" class="card-img-top" alt="...">  
          <div class="card-body">
                <h5 class="card-text">Product Name: <?php echo $value['productname']; ?></h5>
                <h5 class="card-text">Product Price: &#8358 <?php echo number_format($value['productprice']); ?></h5>
                <h5 class="card-text">Product Quantity: <?php echo $value['productquantity']; ?></h5>
                <h5 class="card-text pb-4">Product Category: <?php echo $value['category_name']; ?></h5>
                <div class="offset-4 mt-4">
                <button class="btn btn-success btn-lg fa fa-edit"> Edit</button>
                <button class="btn btn-danger btn-lg fa fa-trash-alt ml-3"> Delete</button>
                </div>
          </div><br>
        </div>
        <?php }  ?>
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