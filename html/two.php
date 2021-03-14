<?php include('Admin.php');
      $adminobj= new Admin;
      if (!isset($_SESSION['id'])) {
      header('location:index.php');
      }

      $cusobj= new Admin;
      $cus= $cusobj->getUsers();
  
      $check= $adminobj->getCategory();

   include('Customer.php');
   $obj= new Customer;
  $checkin= $obj->getProducts();


 
     include ('header3.php');
?>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active text-dark" id="nav-dashboard-tab" data-toggle="tab" href="#nav-dashboard" role="tab" aria-controls="nav-dashboard" aria-selected="true">Dashboard</a>
    <a class="nav-link text-dark" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-link text-dark" id="nav-category-tab" data-toggle="tab" href="#nav-category" role="tab" aria-controls="nav-category" aria-selected="false">Category</a>
    <a class="nav-link text-dark" id="nav-orders-tab" data-toggle="tab" href="#nav-orders" role="tab" aria-controls="nav-orders" aria-selected="false">Customer Orders</a>
    <a class="nav-link text-dark" id="nav-details-tab" data-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-details" aria-selected="false">Customer Details</a>
    <a class="nav-link text-dark" id="nav-products-tab" data-toggle="tab" href="#nav-products" role="tab" aria-controls="nav-products" aria-selected="false">Products</a>
    <a class="nav-link text-dark" id="nav-log-tab" data-toggle="modal" data-target="#staticBackdrop">
   Log Out
  </a>
    
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active m-3" id="nav-dashboard" role="tabpanel" aria-labelledby="nav-dashboard-tab">
    <div class="row justify-content-center">
      <div class="col-md-3 m-1" style="min-height: 100;">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-12">
              <div class="card-body">
                <h2 class="card-title fa fa-cart-arrow-down"> SALES</h2>
                <p class="card-text">This is a wider card with supporting </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="card-footer bg-info"></div>
        </div>
      </div>
      <div class="col-md-3 m-1" style="min-height: 100;">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-12">
              <div class="card-body">
                <h2 class="card-title fa fa-money-check-alt"> ORDERS</h2>
                <p class="card-text">This is a wider card with supporting</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="card-footer bg-info"></div>
        </div>
      </div>
      <div class="col-md-3 m-1" style="min-height: 100;">
       <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-12">
              <div class="card-body">
                <h2 class="card-title fa fa-user-plus"> TOTAL USER</h2>
                <p class="card-text">This is a wider card with supporting</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="card-footer bg-info"></div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 offset-4 m-1" style="min-height: 100;">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-12">
              <div class="card-body">
                <h2 class="card-title fa fa-chart-line"> TOP SELLING</h2>
                <p class="card-text">This is a wider card with supporting </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="card-footer bg-info"></div>
        </div>
      </div>
      <div class="col-md-4 m-1" style="min-height: 100;">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-12">
              <div class="card-body">
                <h2 class="card-title fa fa-box"> TOTAL PRODUCT</h2>
                <p class="card-text">This is a wider card with supporting </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="card-footer bg-info"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade m-5" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="row">
      <div class="col-md-6 offset-3">
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0 bg-light">
              <div class="col-md-4">
                <img src="../images/user2.png" class="img-fluid">
                <h5><?php echo $_SESSION['fname'];?></h5>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title">Welcome back,<?php echo $_SESSION['fname'];?></h2>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="card-footer bg-light"><a href="#nav-orders" class="text-dark"><h5 class=" fa fa-arrow-alt-circle-right">  View all pending orders</h5></a></div>
          </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-category" role="tabpanel" aria-labelledby="nav-category-tab">
    <div class="row" id="cat" >
        <div class="col-md-12">
          <div class="col-12">
            <h1 style="text-decoration: underline;" class="text-center pt-3">Category</h1>
          </div>
          <div class="row">
        <div class="col-md-6 pt-3">
          <button type="button" class="btn btn-info btn-lg fa fa-plus-square mb-4" data-toggle="modal" data-target="#staticBackdroop">
         Add new category
        </button>
        </div>
      </div>   
          <table class="table table-dark table-hover mt-3">
            <tr>
              <th>Category Name</th>
              <th>Action</th>
            </tr>
            <?php foreach ($check as $val) { ?>
            <tr>
              <td><?php echo $val['category_name']; ?></td>
              <td>
                <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#edit"> Edit </button>
                <button type="button" class="btn btn-danger fa fa-trash-alt ml-3" data-toggle="modal" data-target="#staticBackkdroop"> Delete </button>
                
              </td>
            </tr>
            <?php }  ?>
          </table>
        </div>
      </div>
  </div>
  <div class="tab-pane fade" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab">
    <div class="row" >
        <div class="col-12">
          <h1 style="text-decoration: underline;" class="text-center pt-3">Customer Orders</h1>
        </div>
        <div class="col-12">
          <table class="table table-dark table-hover mt-3">
            <tr>
              <th>Customer Id</th>
              <th>Product Name</th>
              <th>Product Category</th>
              <th>Quantity</th>
              <th>Date</th>
              <th>Comment</th>
              <th>Status</th>
              <th>Total</th>
            </tr>
            <tr>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
            </tr>
             <tr>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
            </tr>
             <tr>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
            </tr>
             <tr>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
            </tr>
             <tr>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
            </tr>
             <tr>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
              <td>xx</td>
            </tr>
          </table>
        </div>
      </div>
  </div>
  <div class="tab-pane fade" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab">
    <div class="row" id="prod"  >
        <div class="col-md-12">
          <div class="col-12">
            <h1 style="text-decoration: underline;" class="text-center pt-3">Customer Details</h1>
          </div>
          <table class="table table-dark table-hover mt-3">
            <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Store Name</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Address</th>
            </tr>
            <?php foreach ($cus as $value) { ?>
                  <tr>
                      <td><?php echo $value['first_name']; ?></td>
                      <td><?php echo $value['last_name']; ?></td>
                      <td><?php echo $value['email']; ?></td>
                      <td><?php echo $value['store_name']; ?></td>
                      <td><?php echo $value['gender']; ?></td>
                <td><?php echo $value['phone']; ?></td>
                <td><?php echo $value['address']; ?></td>
                    <td>
                      <button class="btn btn-success fa fa-edit"> Edit</button>
                <button class="btn btn-danger fa fa-trash-alt ml-3"> Delete</button>
                    </td>
                  </tr>
                  <?php }  ?>
          </table>
        </div>
      </div>
    </div>
  
  <div class="tab-pane fade" id="nav-products" role="tabpanel" aria-labelledby="nav-products-tab">
    <div class="row" id="prod"  >
        <div class="col-md-12">
          <div class="col-12">
            <h1 style="text-decoration: underline;" class="text-center pt-3">View Products</h1>
          </div>
          <table class="table table-dark table-hover mt-3">
            <tr>
              <th>Product Name</th>
              <th>Product Picture</th>
              <th>Store Name</th>
              <th>Product Price</th>
              <th>Product Category</th>
              <th>Action</th>
            </tr>
            <?php foreach ($checkin as $value) { ?>
                  <tr>
                      <td><?php echo $value['productname']; ?></td>
                      <td><img style="width:50px"; src="<?php echo "../uploads/".$value['productpicture']; ?>" class="card-img-top" alt="..."></td>
                      <td><?php echo $value['store_name']; ?></td>
                      <td> &#8358 <?php echo number_format($value['productprice']); ?></td>
                      <td><?php echo $value['category_name']; ?></td>
                      <td>
                        <button class="btn btn-success fa fa-edit"> Edit</button>
                        <button class="btn btn-danger fa fa-trash-alt ml-3"> Delete</button>
                      </td>
                  </tr>
            <?php }  ?>
          </table>
        </div>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header" style="border-bottom: none;">
        <h3 class="modal-title" id="exampleModalLabel">LOG OUT</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center">ARE YOU SURE YOU WANT TO LOG OUT?</h5>
      </div>
       <div class="modal-footer justify-content-center" style="border-top: none;">
        <a href="logout.php" class="btn btn-success col-md-3 fa fa-check"> Yes</a>
        <a href="#" class="btn btn-danger col-md-3 fa fa-window-close" data-dismiss="modal"> No</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdroop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Add a category</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="addnewcategory.php">
      <div class="modal-body">
        <label>Enter New Category Name:</label>
        <input type="text" name="newcat" class="form-control">
      </div>
       <div class="modal-footer justify-content-center" style="border-top: none;">
       <!--  <button class="btn btn-success col-md-3" type="submit">Save</button -->
       <button type="button" class="btn btn-danger col-md-3" data-dismiss="modal">Dismiss</button>
       <button class="btn btn-success col-md-3">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" id="edit">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit Your Category</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="editnewcategory.php">
      <div class="modal-body">
          <label>Edit Category Name:</label>
          <input type="text" name="editcat" class="form-control" value="">
          <input type="hidden" name="id" id="id" value="<?php echo $val['category_id'];?>">
      </div>
       <div class="modal-footer justify-content-center" style="border-top: none;">
        <button class="btn btn-success col-md-3">Update</button>
        <button type="button" class="btn btn-danger col-md-3" data-dismiss="modal">Dismiss</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackkdroop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <div class="modal-header" style="border-bottom: none;">
        <h3 class="modal-title" id="exampleModalLabel">DELETE CATEGORY</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="text-center">ARE YOU SURE YOU WANT TO DELETE THIS CATGORY?</h5>
      </div>
       <div class="modal-footer justify-content-center">
        <a href="#" class="btn btn-success col-md-3 fa fa-check"> Yes</a>
        <a href="#" class="btn btn-danger col-md-3 fa fa-window-close" data-dismiss="modal"> No</a>
      </div>
    </div>
  </div>
</div>


<br><br> 
        <div class="row bg-dark mt-5">
          <div class="col pt-2">
            <p style="text-align: center" class="font-weight-bold text-white">Copyright &copy; All rights reserved | Designed by Odeyeyiwa Omotoyosi 2021</p>
          </div>
        </div>
    </div>  
      <script src="../js/jquery-3.5.1.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.js"></script>
      <script src="../js/eko.js"></script>

      <script type="text/javascript">
        // $(document).ready(function(){
          $('#edit').on('show.bs.modal',function(e){
            var userid = $(e.relatedTarget).data('id');
            $('#id').val(userid);
          }
        // })
      </script>
  </body>
  </html>