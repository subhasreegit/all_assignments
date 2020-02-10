<html>
<body>

<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "Assignment_sql";


	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

	if(isset($_POST['data'])){
		$k=$_POST['data'];
		$m=$_SESSION['ID'];
		$q2="select Sequrity_answer from data where Username='$m'";
		$val2=mysqli_query($conn,$q2);
		$ql1=mysqli_fetch_assoc($val2);
		//echo $ql1['Sequrity_answer'];
		if($ql1['Sequrity_answer']==$k)
		{
			header('location:./set_pass.php');
		}
		else{
			echo "your answer is wrong";
		}
	}	
?>