<?php	

	session_start();
		$data1="Subhasree";
		$data2="123456";

	if(isset($_POST['userid'])){
		if (($_POST['userid']==$data1) && ($_POST['pass_word']==$data2)) {
			$_SESSION['USERID']=$data1;
			$z=1;
		//echo "<h1>"."Welcome"." ".$_POST['userid']."</h1>";
		}
		else{
			header("Location:assignment7.php");
		}
	}
	elseif (isset($_SESSION['USERID'])) {		
			$z=2;
	}
	else
	{
			header("Location:assignment7.php");		
	}
	
?>





<html>
	<head>
	<title>Assignment7</title>
	<link rel="stylesheet" type="text/css" href="final.css">
	<link rel="stylesheet" type="text/css" href="wel.css">

</head>

<body>

		<a href="/logout.php"><button> Sign out</button></a>
	<div class="second">	
	<?php
		if($z==1 || $z==2){
			echo "<h1>"."Welcome"." ".$_SESSION['USERID']."</h1>";
		}
	?>
	</div>

	<div class="footer">
		<div class="pagination">
  			<a href="/welcome.php" class="active">Home</a>
  			<a href="/assignment_1.php">1</a>
  			<a href="/assignment2.php">2</a>
  			<a href="/assignment3.php">3</a>
  			<a href="/assignment_4.php">4</a>
  			<a href="/assignment5.php">5</a>
  			<a href="/assignment6.php">6</a>
  			<a href="/assignment_1.php">next&raquo;</a>
		</div>
	</div>



</body>
</html>