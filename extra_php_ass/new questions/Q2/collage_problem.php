<?php

	class college{
		public $clg=array();
		public function __construct($id,$clg_name)
    	{
        	$this->clg=array($id=>$clg_name);        	
    	}
	}


	class clg_details{
		public $details=array();
		public function __construct($doc_name,$doc_type,$doc_college,$sent)
    	{
        	$this->clg=array('doc_name'=>$doc_name,'doc_type'=>$doc_type,'doc_college'=>$doc_college,'sent'=>$sent);        	
    	}

	}


	class functions{

		function status($array){
			echo "<br>";
			print_r($array);
			foreach($array as $key=>$value){
				foreach($value as $key1=>$value1){
					foreach($value1 as $key2=>$value2){
						if($key2=='sent'){
							if($value2==1){
								$result='Success';
							}
							else{
								$result="Fail";
							}
						}
					}
				}
			}
			return $result;
		}

		function output($array1,$array2){
			echo "<br>";
			print_r($array1);
			echo "<br>";
			print_r($array2);
			echo "<br>";

			foreach($array1 as $key=>$value){
				foreach($value as $key1=>$value1){
					foreach($value1 as $key2=>$value2){
						echo '$coll'.'['.$key2.']'.'->[college_name]='.$value2.'<br>';
					}
				}
			}
			foreach($array2 as $key=>$value){
				foreach($value as $key1=>$value1){
					foreach($value1 as $key2=>$value2){
						echo '$coll'.'['.$key2.']'.'->[college_name]='.$value2.'<br>';
					}
				}
			}

		}
	}


	$clg_obj[1]=new college('C1','NiT');
	$clg_obj[2]=new college('C2','GNIT');

	print_r($clg_obj);

	$details_obj[0]=new clg_details('student_data','A','C1','1');
	$details_obj[1]=new clg_details('student_marks','B','C1','0');

	$function_obj=new functions();
	$function_obj->status($details_obj);
	$function_obj->output($clg_obj,$details_obj);


?>