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


	echo "123";
	if(isset($_POST['pass_word1'])){
		if( isset($_POST['pass_word2'])){
		echo "123";
		$o=$_POST['pass_word1'];
		$p=$_POST['pass_word2'];
		if($o==$p)
		{
			$q=$_SESSION['ID'];
			$q2="UPDATE data SET Password='$o' WHERE Username='$q'";
			//echo $q;
			$val2=mysqli_query($conn,$q2);
			session_destroy();
			header('location:forgot_login_page.php');
			session_end();
		}
		else{
			session_destroy();
			echo "Try Again!";
			session_end();
		}
	}
	}


?>