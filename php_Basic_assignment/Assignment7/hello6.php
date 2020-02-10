<?php
session_start();
    if(!isset($_SESSION['USERID'])){
        header('Location:/assignment7.php');
    }
?>







<!DOCTYPE html>
<html>
<head>
	<title>PHP first ssignment</title>
	<link rel="stylesheet" type="text/css" href="final.css">
	

</head>
<body>




		<?php
			ob_start();

			header("Content-type: application/vnd.ms-word");
			header("Content-Disposition: attachment;Filename=document_name.doc");


			$file_name=$_SESSION['imgdata1'];
			$file_type=$_SESSION['imgdata2'];
			$file_size=$_SESSION['imgdata3'];
			$file_tem_loc=$_SESSION['imgdata4'];
			$file_store="/var/www/html/images/".$file_name;
			echo "<img height='100px' width='100px' src =".$file_store.">";
			echo "<br>"."<br>";

			echo "First Name:"." ";
			echo $_SESSION['firstname'];
			echo "<br>"."<hr>";
			echo "Last Name:"." ";
			echo $_SESSION['lastname'];
			echo "<br>"."<hr>";


			echo "Marks table: "."<br>";
			
		?>

			<br><!--here we created a table using the multidimentional index array to print the data in terms of table.-->
			<table border="1" cellspadding="5" cellpadding="5">
				<tr>
					<td><b>SUBJECT</b></td>
					<td><b>MARKS</b></td>
				</tr>
			<?php
				for ($i=0; $i<$_SESSION['NUMBER'] ; $i++) { 
				# code...
					echo "<tr>";
					foreach ($_SESSION['arr'][$i] as $value) {
					# code...
						echo "<td>".$value."</td>";
					}
					echo "</tr>";
				}
			?>
		</table> 
		<?php 


			header("Content-type: application/vnd.ms-word");
			header("Content-Disposition: attachment;Filename=downloaded_file.doc");

			echo "<br>"."<hr>";
			echo "Phone Number: "." ";
			echo $_SESSION['PH'];
			echo "<br>"."<hr>";
			echo "Email Address: "." ";
			echo $_SESSION['em'];
			echo "<br>";

			$temp=ob_get_contents();
			$fileName="/var/www/html/images/file".rand(0,999).".doc";
			$fp=fopen($fileName,"w");
			if($fp==false)
			{
				echo("Error in opening the uploaded file");
				exit();
			}
			fwrite($fp,$temp );
			fclose($fp);
			ob_end_flush();


			
		?>


	
</body>
</html>