<?php


class functions{

		public function grade($gd,$array){
		
			$j=0;
			$result=array();
			foreach($array as $key=>$value){
				if($key==$gd){				
					foreach($value as $key1=>$value2){
						foreach($value2 as $key2=>$value3){
							foreach($value3 as $key3=>$value4){
								$result[$j++]=$value4;
								}
						}
					}
				}
			}
			return $result;
		}

		public function output($array,$array1,$array2){

			$temp1=array();
			$temp2=array();
			$k=0;
			echo "<table border=3px>";
			echo "<tr>";
			echo "<td>"."Name"."</td>";
			echo "<td>"."DOB"."</td>";
			echo "<td>"."Grade"."</td>";
			echo "<td>"."Subjects"."</td>";
			echo "<td>"."Result"."</td>";
			echo "</tr>";
			echo "<tr>";
			foreach($array as $key=>$value){
				foreach($value as $key1=>$value1){
					foreach($value1 as $key2=>$value2){
						if($key2=='name' || $key2=='dob' || $key2=='grade'){
							echo "<td>".$value2."</td>";
						}
					}
				}
			}
			foreach($array2 as $key=>$value){
				foreach($value as $key1=>$value1){
					foreach($value1 as $key2=>$value2){
						foreach($value2 as $key3=>$value3){
							$temp1[$k]=$key3;
							$temp1[++$k]=$value3;
							$k=$k+1;
						}
						
					}
				}
			}
			$j=0;
			$i=0;
			
			echo "<td>".$temp1[$j]."(".$temp1[$i+1].",".$array1[$i+1].")"."<br>".$temp1[$j+2]."(".$temp1[$i+3].",".$array1[$i+3].")"."<br>".$temp1[$j+4]."(".$temp1[$i+5].",".$array1[$i+5].")";
			for($i=0;$i<count($temp1);$i++){
				if($i<=3){
					if($temp1[$i+2]>=$array1[$i+2]){
						$j++;
					}
				}
			}
			if($j>=2){
				echo "<td>"."pass"."</td>";
			}
			else{
				echo "<td>"."fail"."</td>";
			}
			echo "</tr>";
			echo "</table>";
		}
	}


?>