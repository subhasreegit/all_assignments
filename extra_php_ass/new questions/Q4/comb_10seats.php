<?php
	
	class person{

		public $name=array();
		public $gender=array();

		public function position($array){

			$k=0;
			$o=0;
			$array2=array();
			foreach($array as $key=>$value){
				foreach($value as $key1=>$value1){
					foreach($value1 as $key2=>$value2){
						$array2[$k]=$value2;
						$k=$k+1;
					}
				}		
			}
			$m=count($array2);
			for($k=1;$k<$m;$k=$k+2){
				if($array2[$k]=='F'){
					if($k==0){
						if($array2[$k+2]=='F'){
							if($array2[$k+4]=='F'){
								$temp_g=$array2[$k-1];
								$temp_n=$array2[$k-2];
								$array2[$k-1]=$array[$k+2];
								$array2[$k-2]=$array[$k+1];
								$array[$k+2]=$temp_g;
								$array[$k+1]=$temp_n;
							}
							else{
								if($array2[$k+6]=='F'){
									$temp_g=$array2[$k+8];
									$temp_n=$array2[$k+8];
									$array2[$k+8]=$array[$k+2];
									$array2[$k+8]=$array[$k+1];
									$array[$k+2]=$temp_g;
									$array[$k+1]=$temp_n;
								}
							}
						}
					}
					else if($k==$m-5){
						if($array2[$k+2]=='F'){
							if($array2[$k+4]=='F'){
								$temp_g=$array2[1];
								$temp_n=$array2[0];							
								$array2[1]=$array2[$k+2];
								$array2[0]=$array2[$k+1];							
								$array2[$k+2]=$temp_g;
								$array2[$k+1]=$temp_n;								
							}
						}else{
								$temp_g=$array2[$m-1];
								$temp_n=$array2[$k-2];
								$array2[$m-1]=$array2[$k+2];
								$array2[$m-2]=$array2[$k+1];
								$array[$k+2]=$temp_g;
								$array[$k+1]=$temp_n;							
						}
					}
					else if($k==$m-3){
						if($array2[$k]=='F'){
							$temp_g=$array2[$k-2];
							$temp_n=$array2[$k-1];							
							$array2[$k-2]=$array2[$k];
							$array2[$k-1]=$array2[$k];							
							$array2[$k]=$temp_g;
							$array2[$k]=$temp_n;	
						}
					}
					else{
						
						if($array2[$k+2]=='F'){
							if($array2[$k+4]=='F'){
								$temp_g=$array2[$k-2];
								$temp_n=$array2[$k-1];							
								$array2[$k-2]=$array2[$k+2];
								$array2[$k-1]=$array2[$k+1];							
								$array2[$k+2]=$temp_g;
								$array2[$k+1]=$temp_n;								
							}
						}
						else{
							if($array2[$k+6]=='M'){
								$temp_g=$array2[$k+4];
								$temp_n=$array2[$k+3];							
								$array2[$k+4]=$array2[$k+2];
								$array2[$k+3]=$array2[$k+1];							
								$array2[$k+2]=$temp_g;
								$array2[$k+1]=$temp_n;
							}
							else if($array2[$k+6]=='F'){
								$temp_g=$array2[$k+8];
								$temp_n=$array2[$k+7];							
								$array2[$k+8]=$array2[$k+2];
								$array2[$k+7]=$array2[$k+1];							
								$array2[$k+2]=$temp_g;
								$array2[$k+1]=$temp_n;
							}
						}
					}
				}
			}
			
			for($n=0;$n<$m;$n=$n+2){
				echo $array2[$n]." ";
			}
		}
		
	}


	

	








class name{

	public $array=array(0=>array('name'=>'Anand Thakur',
					'gender'=>'M'),
				1=>array('name'=>'Shakti Ray',
					'gender'=>'M'),
				2=>array('name'=>'Gourav Gupta',
					'gender'=>'M'),
				3=>array('name'=>'Nirmallya Mondol',
					'gender'=>'M'),
				4=>array('name'=>'Ashim Banerjee',
					'gender'=>'M'),
				5=>array('name'=>'Ankush Sen',
					'gender'=>'M'),
				6=>array('name'=>'Subham Sinha',
					'gender'=>'M'),
				7=>array('name'=>'Aaishika Banerjee',
					'gender'=>'F'),
				8=>array('name'=>'Dyuti Shome',
					'gender'=>'F'),
				9=>array('name'=>'Sneha Hazra',
					'gender'=>'F')
			);
}


			$name_obj= new name();
			for($i=0;$i<count($name_obj->array);$i++)
			{
				$person_obj[$i]= new person();
				$person_obj[$i]->name=$name_obj->array[$i]['name'];
				$person_obj[$i]->gender=$name_obj->array[$i]['gender'];				

				
			}
			$array1=array($person_obj);
			print_r($array1);
			echo "<br>";


			$person_obj2= new person();
			$person_obj2->position($array1);

?>