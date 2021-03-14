			 <?php 
				include ('header.php');
			 ?>
			<div class="row">
					<div class="col-6 offset-3 bg-white pt-4 mt-5 mb-5">
						<h2 class="text-white" style="text-align: center;">CONTACT US</h2>
					<div class="row">
						<div class="col">
							<h3 style="text-align: center;" class="mb-3">TALK TO US TODAY........</h3>
							<div class="offset-2">
							<button class="btn btn-info btn-lg" id="mess">MESSAGE US</button>	    <button class="btn btn-info btn-lg ml-5 col-4" id="cll">CALL US</button>
							</div>
						</div>
					</div>
					<div class="row mt-5" style="display: none;" id="message">
						<div class="col">
							<form>
								<input type="text" name="name" placeholder="Enter your name" class="form-control"><br>
								<input type="email" name="email" placeholder="Enter your e-mail" class="form-control"><br>
								<input type="number" name="number" placeholder="enter your order number" class="form-control"><br>
								<textarea class="form-control">Enter your message...</textarea><br>
								<button class="btn btn-info offset-5">SUBMIT</button>
							</form>
						</div>
					</div>
					<div class="row mt-5" style="display: none;" id="call">
						<div class="col">
							<h1 style="text-align: center;" class="mb-3">+2348098745461</h1>
								<h3 style="text-align: center;">Business hours: Monday to Friday 9:00am to 5:00pm</h3>
						</div>
					</div>
					<div class="row mt-5" style="text-align: center;">
						<div class="col">
							<h3>NEED HELP TRACKING YOUR ORDER?</h3>
								<h4>Call 08098745461 or 08092468713 or 08098745461</h4>
								<p>Business hours: Monday to Friday 9:00am to 5:00pm</p>
								<p>Weekends: 12:00am to 5:00pm</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h3 class="alert alert-light text-dark text-center">CONNECT WITH US</h3>
				</div>
			</div>
				<div class="row justify-content-center">
					
							<div class="col-md-1" ><a href="https://www.instagram.com"><img src="../images/gram2.jpg"class="img-fluid" style="width: 50%;height: 80%"></a></div>
							<div class="col-md-1"><a href="https://www.facebook.com"><img src="../images/fb.jpg" class="img-fluid" style="width: 50%;height: 80%"></a></div>
							<div class="col-md-1"><a href="https://www.twitter.com"><img src="../images/twit.jpg"class="img-fluid" style="width: 50%;height: 80%"></a></div>
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
			<!--<script src="js/eko.js"></script>-->

			<script type="">
				$(document).ready(function(){
					$('#mess').click(function(){
						$('#message').show()
							$('#call').hide()
					})
					$('#cll').click(function(){
						$('#call').show()
							$('#message').hide()
				})
				})
			</script>

	</body>
	</html>