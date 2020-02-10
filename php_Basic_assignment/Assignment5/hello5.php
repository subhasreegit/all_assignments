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
        
            



            // printed the contact no. given by the user with+91 
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
           {
            	$access_key = '94e2188292a97602e09dabb9a8ec2781';//access key of the api checking
            	$email_address = $_POST['email'];// taking the emai address from the user
            	$ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  //here a curl session is initialized
            	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// to set an option for curl transfer
            	$json_response = curl_exec($ch);// it performs a curl session
            	$result = json_decode($json_response,true);
            	if ($result = json_decode($json_response, true)) { //it returns a std class object array
                	if (floatval($result['score']) >= 0.8)
                	 { // or 0.65 for transactional emails and checked it by the score associative key value
                    	echo 'The e-mail address '.$result['email'].' is valid.';
                    	$_SESSION['em']=$_POST['email'];
                	} 
                	else {
                    	echo 'The entered e-mail address isn\'t valid.';
               		}
            	}   
          	}  
        
	?>
	
</body>
</html>