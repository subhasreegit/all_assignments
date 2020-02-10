<?php
	class student_data{
		public $s_data=array();
		public function __construct($id,$name,$dob,$grade)
    	{
        	$this->s_data['id'] = $id;
        	$this->s_data['name'] = $name;
        	$this->s_data['dob'] = $dob;
        	$this->s_data['grade'] = $grade;
    	}
	}

	class subject_details{

		public $subject_details=array();
		public function __construct($subject1,$code1,$pass1,$subject2,$code2,$pass2,$subject3,$code3,$pass3)
    	{
        	$this->subject_details[$subject1] =array('code'=>$code1,'mm'=>$pass1);
        	$this->subject_details[$subject2] =array('code'=>$code2,'mm'=>$pass2);
        	$this->subject_details[$subject3] =array('code'=>$code3,'mm'=>$pass3);
    	}
	}

	class student_marks{
		public $marks_details=array();
		public function __construct($id,$code1,$marks1,$code2,$marks2,$code3,$marks3)
    	{
        	$this->marks_details[$id]=array($code1=>$marks1,$code2=>$marks2,$code3=>$marks3);
    	}
	}


	class functions{

		public function grade($gd,$array){
		
			$j=0;
			$result=array();
			foreach($array as $key=>$value){
				if($key==$gd){				
					foreach($value as $key1=>$value2){
						foreach($value2 as $key2=>$value3){
							foreach($value3 as $key3=>$value4){
								/*if($j==0){
									$code=$value3;
								}
								else{
									$result[$code]=$value3;
								}
								$j++;
	*/
								//$result[$j][$key2]=$value3;
								//echo $value4;
								$result[$j++]=$value4;
								}
						}
						//$j=0;
						//$j=$j+1;
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
			//for($i=0;$i<count($temp1);$i++){
				echo "<td>".$temp1[$j]."(".$temp1[$i+1].",".$array1[$i+1].")"."<br>".$temp1[$j+2]."(".$temp1[$i+3].",".$array1[$i+3].")"."<br>".$temp1[$j+4]."(".$temp1[$i+5].",".$array1[$i+5].")";
				//echo "<td>".$temp1[$j+2]."(".$temp1[$i+2].",".$array1[$i+2].")"."<br>";
				//echo "<td>".$temp1[$j+2]."(".$temp1[$i+3].",".$array1[$i+3].")"."<br>";

				
			//}
			echo "</td>";
			for($i=0;$i<count($temp1);$i++){
				if($temp1[$i+2]>=$array1[$i+2]){
					$j++;
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
			print_r($temp1);
			echo $i;
		}
	}

	$student_obj[0]= new student_data('st1','john',date('m/d/Y',1580812642),12);

	$subject_details_obj[12]=new subject_details('English','E',20,'Math','M',25,'Science','S',20);

	$function_obj=new functions();
 	$array_data=array();
	$array_data=$function_obj->grade(12,$subject_details_obj);
	echo "<br>";
	print_r($array_data);

	$marks_details_obj[0]=new student_marks('st1','E',20,'M',15,'S',13);

	$function_obj->output($student_obj,$array_data,$marks_details_obj);


	/*$student=array(0=>array('id' => 'st1',
										 'name' => 'John',
										 'dob' => '1580812642',
										 'grade' => 12)
								);*/

	//print_r($array_student);

	/*$subject=array(12=>array('English'=>array('code'=>'E',
													 'mm'=>20),
									'Maths'=>array('code'=>'M',
													 'mm'=>25),
								    'Physics'=>array('code'=>'P',
													   'mm'=>30),
								    'Chemitry'=>array('code'=>'C',
								                        'mm'=>25),
								    'Biology'=>array('code'=>'B',
								                      'mm'=>20),
								    'Computer Science'=>array('code'=>'CS',
																'mm'=>25))
								);*/

	/*public $marks=array('st1'=>array('E'=>80,
									 'M'=>80,
									 'P'=>80,
									 'C'=>90,
									 'B'=>88,
									 'CS'=>'NULL'));

	/*public*/ /*function grade($gd,$array){
		
		$j=0;
		$result=array();
		foreach($array as $key=>$value){
			if($key==$gd){				
				foreach($value as $key1=>$value2){
					foreach($value2 as $key2=>$value3){
						if($j==0){
							$code=$value3;
						}
						else{
							$result[$code]=$value3;
						}
						$j++;

					}
					$j=0;
				}
			}
		}
		return $result;		
	}*/





	
	/*$std= new student_data();
	//print_r($std->student);
	echo "<br>";
	//print_r($std->subject);
	echo "<br>";
	//print_r($std->marks);
	echo "<br>";*/
	//$student_obj[1]= new student_data('st2','mohn',date('m/d/Y',1580812642),12);
	

	/*$student_obj[0]->id='st1';
	$student_obj[0]->name='john';
	$student_obj[0]->dob=date('m/d/Y',1580812642);
	$student_obj[0]->grade=12;
*/
	/*print_r($student_obj);
	echo "<br>";

	foreach($student_obj as $key=>$value){
		foreach($value as $key2=>$value2){
			foreach($value2 as $key3=>$value3){
				echo $value3."<br>";
			}
		}
	}*/
 	
 	
 	/*print_r($subject_details_obj);*/


 	


 	/*foreach($subject_details_obj as $key=>$value){
		foreach($value as $key2=>$value2){
			foreach($value2 as $key3=>$value3){
				echo $key3."<br>";
				foreach($value3 as $key4=>$value4)
					
					echo $value4."<br>";
				
			}
		}
	}*/

	//print_r($subject_details_obj);
 	
 	/*$subject_details_obj[12]->subject_name='English';
 	$subject_details_obj[12]->code='E';
 	$subject_details_obj[12]->mm=20;


 	print_r($subject_details_obj);
*/

	
	
	//print_r($marks_details_obj->marks_details);



?>

