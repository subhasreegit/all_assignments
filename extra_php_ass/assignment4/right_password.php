<?php
	
	
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "Assignment_sql";


	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

	if(isset($_POST['pass_word'])){
		$k=$_POST['pass_word'];
		$user_name=$_POST['userid'];
		$q1="select Username as User from data where Password=$k";
		$val1=mysqli_query($conn,$q1);
		$ql1=mysqli_fetch_assoc($val1);
		if($_POST['userid']==$ql1['User']){
			echo "welcome"." ".$user_name;
		}
		else{
			echo "invallid id or password.Please enter again";
		}
	}
	
?>