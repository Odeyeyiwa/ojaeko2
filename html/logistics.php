<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Oja Eko | E-commerce and Logistics</title>
			<meta name="keyword" content="">
			<meta name="description" content="">
			<meta name="author" content="">
			<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
				<style type="text/css">
					
					
				</style>
				<link rel="stylesheet" type="text/css" href="../animate.css">
				<link rel="stylesheet" type="text/css" href="../bootstrap.css">
				<link rel="stylesheet" type="text/css" href="../icons/css/all.css">
	</head>
	<body>
		<div class="container-fluid bg-light" style="box-sizing: border-box;">
			<div class="row">
				<div class="col">
					<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
					  <div class="container-fluid">
					   <a class="navbar-brand" href="index.php"><img src="../images/logo2.jpg"></a>
					    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-icon"></span>
					    </button>
					    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent" >     
					      <ul class="navbar-nav me-auto mb-2 mb-lg-0 offset-1">
					      	 <li class="nav-item">
					          <a class="nav-link active" aria-current="page" href="logistics.php">Home</a>
					        </li>
					         <li class="nav-item">
					          <a class="nav-link active" aria-current="page" href="track.php">Track Package</a>
					        </li>
					         <li class="nav-item">
					          <a class="nav-link active" aria-current="page" href="quote.php">Quote</a>
					        </li>
					        <li class="nav-item">
					          <a class="nav-link active" aria-current="page" href="pickup.php">Schedule Pickup</a>
					        </li>
					      </ul>
					    </div>
					  </div>
					</nav>
				</div>
			</div>
				<div class="row">
					<div class="col" style="height: 30%">
						<h1 style="font-size: 8rem; text-align: center" class="font-weight-bold text-info">OJA EKO LOGISTICS</h1>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h3 style="text-align:center;text-decoration:overline" class="mt-4">WHAT WE CAN OFFER YOU!</h3><br>
					</div>
				</div>
				<div class="row">	
							<div class="pic1 col-md-4 col-12" >
								<img src="../images/airplane.png" width="100" height="60">
							<p>We offer COURIER SOLUTIONS to meet the ever changing business climate,and provide pickup and delivery of your light and heavy package, anywhere you want it </p>
							</div>
							<div class="pic2 col-md-4 col-12">
								<img src="../images/another.jpeg" width="100" height="60">
							<p>We offer an ERRAND SERVICES. With the rise in the number of E-commerce businesses and start-ups, we offer a time bound and flexible delivery services </p>
							</div>
							<div class="pic3 col-md-4 col-12">
								<img src="../images/anywhere.jpeg" width="100" height="60">
							<p>We offer INNOVATIVE LOGISTICS. That is a spectrum of services covering cost-efficient and simple end to end integrated logistics and supply chain management </p>
							</div>
				</div>
							<div class="row">
									<div class="text1 col-md-4 col-12">
										<img src="../images/safe.jpeg" width="100" height="60">
										<p>We offer RELIABILITY & PUNCTUALITY. We delive top-notch services because we understand that our customers deserve the best service possible</p>
										</div>
										<div class="text2 col-md-4 col-12">
											<img src="../images/door.jpeg" width="100" height="60">
										<p>We offer CUSTOMER GOODS. That is we handle transportation and deliveryof all kind of goods - from home furnishing and appliances to packaged consumables. </p>
										</div>
										<div class="text3 col-md-4 col-12">
											<img src="../images/log2.jpg" width="100" height="60">
										<p>We offer DOMESTIC SERVICES. That is we do same day deliveries, bulk deliveries, time bound deliveries, and handle all our packages with care. </p>
										</div>
							</div>
						<div id="track">
			<h2 style="text-align: center;text-decoration:overline" class="mt-5">TRACK YOUR PACKAGES</h2><br><br>
			<input type="text" name="package" id="package" class="col-9 offset-1 form-control-lg track02" style="border-radius:8px" placeholder="Insert tracking number here.........">
			<button class="btn btn-info btn-lg" id="but" class="col-3" style="border-radius:8px">TRACK IT</button>
			</div>
			
			<div id="calculate">
			<h2 style="text-align: center;text-decoration:overline" class="mt-5">QUOTE FOR DELIVEIES</h2><br><br>
			<input type="text" name="address" id="addess" class="col-8 offset-1 form-control-lg add" style="border-radius:8px" placeholder="Input your address........">
			<select class="state" name="State" style="border-radius:8px" class="col-3 form-control">
				<option value="">Select State</option>
				<option value="Lagos">Lagos</option>
				<option value="Abia">Abia</option>
				<option value="Uyo">Uyo</option>
				<option value="Calabar">Calabar</option>
				<option value="Delta">Delta</option>
				<option value="Kano">Kano</option>
				<option value="Kwara">Kwara</option>
				<option value="Jos">Jos</option>
				<option value="Osun">Osun</option>
				<option value="Imo">Imo</option>
				<option value="Oyo">Oyo</option>
				<option value="Ilorin">Ilorin</option>
				<option value="Ogun">Ogun</option>
				<option value="Abuja">Abuja</option>
				<option value="Enugu">Enugu</option>
				<option value="Bauchi">Bauchi</option>
				<option value="Borno">Borno</option>
				<option value="Sokoto">Sokoto</option>
				<option value="Ondo">Ondo</option>
			</select>
			<button class="btn btn-info btn-lg" id="but" class="col-2" style="border-radius:8px">GET QUOTE</button>
			</div><br><br><br>
			<div style="width:50%; display:inline-block;text-align: center;" id="quotee" class="offset-3 mt-3">
			<h2 style="text-decoration:overline">GET A QUICK QUOTE(LOCAL)</h2>
			<p>*Quote are for standard delivery. Login for express price*</p>
			FROM &nbsp; &nbsp; &nbsp;	<select name="State">
										<option value="">Please Select</option>
										<option value="Lagos">Lagos</option>
										<option value="Kwara">Kwara</option>
										<option value="Ogun">Ogun</option>
										<option value="Osun">Osun</option>
										<option value="Ibadan">Ibadan</option>
										<option value="Oyo">Oyo</option>
										<option value="Akure">Akure</option>
										<option value="Ondo">Ondo</option>
										<option value="Kano">Kano</option>
										<option value="Jos">Jos</option>
										<option value="Enugu">Enugu</option>
										<option value="Calabar">Calabar</option>
										<option value="Imo">Imo</option>
										<option value="Edo">Edo</option>
									</select>
									<br><br>
			TO &nbsp; &nbsp; &nbsp;	<select name="State">
										<option value="">Please Select</option>
										<option value="Lagos">Lagos</option>
										<option value="Kwara">Kwara</option>
										<option value="Ogun">Ogun</option>
										<option value="Osun">Osun</option>
										<option value="Ibadan">Ibadan</option>
										<option value="Oyo">Oyo</option>
										<option value="Akure">Akure</option>
										<option value="Ondo">Ondo</option>
										<option value="Kano">Kano</option>
										<option value="Jos">Jos</option>
										<option value="Enugu">Enugu</option>
										<option value="Calabar">Calabar</option>
										<option value="Imo">Imo</option>
										<option value="Edo">Edo</option>
									</select>
									<br><br>
									<button class="btn btn-info">TOTAL</button>
		</div>
			<div>
				<h2 align="center" style="text-decoration:overline" class="mt-5">CLIENTS THAT TRUST OUR SERVICES</h2>
			</div>
			<div style="display: flex">
				<div class="testimony2"align=center class="col-6">
				<div class="star">
				<img src="../images/star.png" width="15" height="15">
				<img src="../images/star.png" width="15" height="15">
				<img src="../images/star.png" width="15" height="15">
				<img src="../images/star.png" width="15" height="15">
				<img src="../images/star.png" width="15" height="15">
				</div>
				<p style="text-align:center; padding:5px">BB Logistics is the fastest and the most reliable logistic company i know till date. They are very efficient with an amazing customer service. I would recommend them any time.</p> 
				<p color=red>- Boluwatife F</p>
				</div>
				<div class="testimony3" align=center class="col-6">
				<div class="star">
				<img src="../images/star.png" width="15" height="15">
				<img src="../images/star.png" width="15" height="15">
				<img src="../images/star.png" width="15" height="15">
				<img src="../images/star.png" width="15" height="15">
				<img src="../images/star.png" width="15" height="15">
				</div>
				<p style="text-align:center; padding:5px">BB Logistics is one of the best logistics companyb in Nigeria. I particularly know when the company stated and the growth it has shown from then to now is quite incredible, and it says a lot about their work ethics too.</p> 
				<p color=red>- David A</p>
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