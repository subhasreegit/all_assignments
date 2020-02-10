<html>
<body>
<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "Assignment_sql";


	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	session_start();

	if(isset($_POST['id_again'])){
		$k=$_POST['id_again'];
		$_SESSION['ID']=$k;
		$q2="select sequrity_Question from data where Username='$k'";
		$val2=mysqli_query($conn,$q2);
		$ql1=mysqli_fetch_assoc($val2);
		echo $ql1['sequrity_Question'];
	}	
?>
	<form action="reset_page.php" method="post">
		<input type="text" name="data" id="data" required/>
		<input type="submit" name="button1" id="button1">
	</form>
</body>
</html>