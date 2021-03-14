<?php
class Admin{

public $conn;

function __construct(){
	$this->conn = new mysqli('localhost','root','','ojaeko');
	session_start();
}

function register($fullname,$email,$phone,$password){
	$encrypted= md5($password);
	$que= "INSERT INTO admin SET name='$fullname',email='$email',phone_number='$phone',password='$encrypted'";
	$this->conn->query($que);
	$id = $this->conn->insert_id;
	return $id;
}

function login($email, $password){
	$encrypted= md5($password);
		$deet=['id','fname','email','phone'];
		$str = "SELECT * FROM admin WHERE email='$email' AND password='$encrypted'";
		$result = $this->conn->query($str);
		//die($str);
		$res=$result->fetch_assoc();
		$id = 0;
		if ($result->num_rows>0) {
			$deet['id'] = $res['admin_id'];
			$deet['fname'] = $res['name'];
			$deet['email'] = $res['email'];
			$deet['phone'] = $res['phone_number'];
			return $deet;
		} 
		return $id;
	}
public function addCategory($cartname) {
		$you="SELECT * FROM category";
        $que = $this->conn->query($you);

        if ($this->conn->insert_id> 0) {
            $msg = 'This category already exist';
            header('location:two.php');
        }else {
            $this->conn->query("INSERT INTO category SET category_name='$cartname'");
            
            $msg = "Your Category has been successfully created";
            
            header('location:two.php');
        }
 
        $msg= "'Kindly fill the form to create a new category'";
        return $msg;
        header('location:two.php');   
    }
function getCategory(){
	$que= "SELECT * FROM category";
	$ans = $this->conn->query($que);
		$row = [];
		while($data=$ans->fetch_assoc()){
			$row[] = $data;}
			return $row;
		}

function editCategory($cartname,$id){

	$que= "UPDATE category SET category_name= '$cartname' WHERE category_id='$id'";
	$ans = $this->conn->query($que);
	}

function getUsers(){
		$cus = "SELECT * FROM user";
		$res = $this->conn->query($cus);
		$row = [];
		while($data=$res->fetch_assoc()){
			$row[] = $data;
		}
		return $row;
	}		
}

 
?>