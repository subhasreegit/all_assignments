<?php 
$arr1 = array('month'=>array(1=>'Jan', 2=>'Feb', 3=>'Mar', 4=>'Apr', 5=>'May'), 'Day'=>array(1=>'Sun', 2=>'Mon', 3=>'Tues', 4=>'Wed'), 'hours'=>array(1=>'12:00 AM', 2=>'1:00 AM'), 1=>'wow one more difference');
$arr2 = array('month'=>array(1=>'Jan', 2=>'Feb', 3=>'May'), 'Day'=>array(1=>'Sun', 2=>'Mon', 3=>'Tues'), 1=>'yes');
 
function multidimentional_array_difference($arr1, $arr2){
    $arrDiff = array();
    foreach($arr1 as $key => $val) {
        if(isset($arr2[$key])){
        	if(is_array($val)){
        		$arrDiff[$key] = multidimentional_array_difference($val, $arr2[$key]);
        	}else{
        		if(in_array($val, $arr2)!=1){
        			$arrDiff[$key] = $val;
        		}
        	}
        }else{
        	$arrDiff[$key] = $val;
        }
    }
    return $arrDiff;
}

print_r(multidimentional_array_difference($arr1, $arr2));

?>