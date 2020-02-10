<?php
//session_start();
    if(!isset($_SESSION['USERID'])){
        header('Location:/assignment7.php');
    }
?>






<!DOCTYPE html>
<html>
<head>
	<title>PHP first ssignment</title>
</head>
<body>
	<?php
		
		
		 	if(isset($_GET["q"])){
            $requested_route = $_GET["q"];
            if($requested_route == '1')
            {
                header("location:assignment_1.php");
                exit;
            }
            if($requested_route == '2')
            {
                header("location:assignment2.php");
                exit;
            }
            if($requested_route == '3')
            {
                header("location:assignment3.php");
                exit;
            }
            if($requested_route == '4')
            {
                header("location:assignment_4.php");
                exit;
            }
            if($requested_route == '5')
            {
                header("location:assignment5.php");
                exit;
            }
            if($requested_route == '6')
            {
                header("location:assignment6.php");
                exit;
            }
            if($requested_route == '8')
            {
                header("location:new.php");
                exit;
            }
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		  $_SESSION['firstname']=$_POST["artistfield_fname"];
		  $_SESSION['lastname']=$_POST["artistfield_lname"];
		
		    echo "YOUR FIRST NAME:"." ". $_SESSION['firstname']."<br>"."YOUR LAST NAME:"." ".$_SESSION['lastname']."<br>";
		    echo "<h4>"."Hello"." ".$_SESSION['firstname']." ".$_SESSION['lastname']."</h4>";
        }
	
?>
	
</body>
</html>