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
              
            echo "YOUR UPLOADED PICTURE IS:"."<br>";
            $_SESSION['imgdata1']=$_FILES['file']['name'];
            $_SESSION['imgdata2']=$_FILES['file']['type'];
            $_SESSION['imgdata3']=$_FILES['file']['size'];
            $_SESSION['imgdata4']=$_FILES['file']['tmp_name'];


            if(isset($_POST['upload'])){
                $file_name=$_FILES['file']['name'];
                $file_type=$_FILES['file']['type'];
                $file_size=$_FILES['file']['size'];
                $file_tem_loc=$_FILES['file']['tmp_name'];
                $file_store="images/".$file_name;
                if(move_uploaded_file($file_tem_loc, $file_store)){
                    echo "<img src=".$file_store." width='150px' height='150px'>";
                 }       
            }
        }

	 ?>
	
</body>
</html>