<?php
require_once("../db.php");
$con = dbConnect();
header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");
  
if(isset($_REQUEST['username']) && isset($_REQUEST["password"])){
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$sqlquery = "SELECT COUNT(*) cnt FROM user_login 
 			WHERE username = '$username' AND password = '$password'";
 	$result = mysqli_query($con,$sqlquery);
 	$row = mysqli_fetch_array($result);
 	$cnt = $row['cnt'];
 	$user_id = "";
 	if($cnt == 1){
 		$sqlidquery = "SELECT emp_id FROM user_login 
			WHERE username = '$username' AND password = '$password'";
	 	$idresult = mysqli_query($con,$sqlidquery);
	 	$idrow = mysqli_fetch_array($idresult);
	 	$user_id = $idrow["emp_id"];
        $dbStatus = "SUCCESS";
        $dbMessage = "Login Successful";
       	
        
	}else{
		
	
		 $dbStatus = "FAILURE";
		 $dbMessage = "Invalid username or password";
		// $url = "student.php";
		 
	}
	$output = array("status"=>$dbStatus,"message"=>$dbMessage,"user_id"=>$user_id);
 	echo json_encode($output);
	//echo '{"status":"success","message":"Login successful"}';
}else{
	echo '{"status":"failed","message":"not enough data provided"}';
}

?>