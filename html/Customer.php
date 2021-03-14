<?php
class Customer{

public $connect;

function __construct(){
	$this->connect = new mysqli('localhost','root','','ojaeko');
	session_start();
}

function register($fname,$lname,$email,$sname,$phone,$gender,$address,$password){
	$password=md5($password);
	$que= "INSERT INTO user SET first_name='$fname',last_name='$lname',email='$email',store_name='$sname',phone='$phone',gender='$gender',address='$address',password='$password'";
	$this->connect->query($que);
	//die($que);
	$id = $this->connect->insert_id;
	return $id;
}

function login($email,$password){
	$password=md5($password);
		$deet=['id','fname','lname','email','phone','gender','address'];
		$str = "SELECT * FROM user WHERE email='$email' AND password='$password'";
		$result = $this->connect->query($str);
		//die($str);
		$res=$result->fetch_assoc();
		$id = 0;
		if ($result->num_rows>0) {
			$deet['id'] = $res['customer_id'];
			$deet['fname'] = $res['first_name'];
			$deet['lname'] = $res['last_name'];
			$deet['email'] = $res['email'];
			$deet['phone'] = $res['phone'];
			$deet['gender'] = $res['gender'];
			$deet['address'] = $res['address'];
			return $deet;
		}
		return $id;
	}

public function logout(){
		session_destroy();
		header("location:index.php");
	} 

public function getdetails($id){
		$str = "SELECT * FROM user WHERE customer_id='$id'";
		$res = $this->connect->query($str);
		$tot=$res->fetch_assoc();
			return $tot;
		}

		function addProduct($pname, $pprice, $pqty, $pcart, $piclist, $cid){
		$tmp=$piclist['productpic']['tmp_name'];
		$type=$piclist['productpic']['type'];
		$filename=$piclist['productpic']['name'];
		$extension= pathinfo($filename, PATHINFO_EXTENSION);
		$newestfilename = time().rand().".$extension";
		$destination="../uploads/$newestfilename";
		$size= $piclist['productpic']['size']; $feedback="";

		print_r("$newestfilename");
		

		$que = $this->connect->query("SELECT * FROM product WHERE productname='$pname'");

		if ($que->num_rows> 0) {
            $msg = 'This product already exist';
            //header('location:products.php');
         }else{

		if (strtolower($extension)=='jpeg' || strtolower($extension)=='png' || strtolower($extension)=='gif'||strtolower($extension)=='jpg') {
			
			if ($size <= 200000000) {
				move_uploaded_file($tmp, $destination);
				$feedback = "Successfully uploaded";

			}else{
				$feedback ='File too large, kindly try again with a smaller image';
			}
		}else{
			$feedback ='Please ensure you have selected a picture please and your picture is not more than 5MB!';
		}
			}

		$query= "INSERT INTO product SET productname='$pname', productprice='$pprice', productquantity='$pqty',prd_category_id ='$pcart',productpicture='$newestfilename', prd_customer_id=$cid";
		 $ans= $this->connect->query("$query");
 		 $msg= "'Product sucessfully added'";
        // header('location:products.php'); 

        $msg= "'Kindly fill the product form'";
        return $msg;
       // header('location:products.php');   
    }

	 function getProducts(){
		$que = "SELECT * FROM product JOIN category ON product.prd_category_id=category.category_id JOIN user ON product.prd_customer_id=user.customer_id";
		$ans = $this->connect->query($que);
		$row = [];
		while($data=$ans->fetch_assoc()){
			$row[] = $data;
		}
		return $row;
	}
	
	public function editProfile($postvar,$id){
		
	$fname= trim(strip_tags($postvar['fname']));
	$lname= trim(strip_tags($postvar['lname']));
	$email= trim(strip_tags($postvar['email']));
	$phone= trim(strip_tags($postvar['phone']));
	$gender= trim(strip_tags($postvar['gender']));
	$address= trim(strip_tags($postvar['address']));

		$q= "UPDATE user SET first_name='$fname', last_name='$lname',email='$email',phone='$phone', gender='$gender',address='$address'WHERE customer_id='$id'";
			$this->connect->query($q);
			
	}
	function myProduct($id){
		$one= "SELECT * FROM product JOIN category ON product.prd_category_id=category.category_id WHERE prd_customer_id='$id'";
		$ans = $this->connect->query($one);
		$row=[];
		while($data=$ans->fetch_assoc()){
			$row[]= $data;
		}
		return $row;
	}
}
 
?>