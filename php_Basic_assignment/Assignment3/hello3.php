



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
            }    }     

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        	$data1=$_POST['text1'];//the text entered by the user is taken by the post and saved in the variable       
        	$data2=explode("\n",$data1);//splited the data with respect to the new line.
        	$k=0;
       	 	$m=0;
            $l=0;
            $countB=count($data2);
            while($l<$countB){
                if(!preg_match("/^[a-zA-Z]+\|[0-9]+$/", trim($data2[$l]))){
                    $k++;
                    echo "Enter correct data";
                    break;
                }
                $l++;
            }
            if($k==0){
        	$t=count($data2);//counted the no. of element in the array
        	while($k<$t){//here all the characters except string is saved in another array.
            	if(($data2[$k]==" ") OR ($data2[$k]=="\t") OR ($data2[$k]=="\r") OR ($data2[$k]=="\0") OR ($data2[$k]==" \x0B") OR ($data2[$k]=="  ") OR($data2[$k]=="  ") OR ($data2[$k]==""))
            	{
            
          	    }
            	else{
            		$data21[$m++]=$data2[$k];
            	}
            	$k++;
            
        	}     
            $q=0;    
            $m=0;
            
            
        	foreach($data21 as $data3){//the string is splited with the condition of "|"
                $data4[]=explode("|", $data3);
        	}   

            $countA=count($data4);

        	$_SESSION['NUMBER']=$countA;
        	$_SESSION['arr']=$data4;

        	echo "<h3>"."Inputed Marks table is:"."</h3>";
            if($q==0){
                echo "<br>";//here we created a table using the multidimentional index array to print the data in terms of table.
                echo "<table border='1' cellspadding='5' cellpadding='5'>";
                echo"<tr>";
                    echo "<td>"."<b>"."SUBJECT"."</b>"."</td>";
                    echo "<td>"."<b>"."MARKS"."</b>"."</td>";
                echo "</tr>";        
                for ($i=0; $i<$countA ; $i++) { 
                # code...
                    echo "<tr>";
                    foreach ($data4[$i] as $value) {
                    # code...
                        echo "<td>".$value."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }
        }
    ?>		 
</body>
</html>