<?php
	

	spl_autoload_register(function($class) {
    	$class = str_replace('\\', '/', $class);
    	require_once('./' . $class . '.php');
	});	

	$student_obj[0]= new student_data('st1','john',date('m/d/Y',1580812642),12);

	$subject_details_obj[12]=new subject_details('English','E',20,'Math','M',25,'Science','S',20);

	$function_obj=new functions();
 	$array_data=array();
	$array_data=$function_obj->grade(12,$subject_details_obj);

	$marks_details_obj[0]=new student_marks('st1','E',20,'M',15,'S',13);

	$function_obj->output($student_obj,$array_data,$marks_details_obj);


?>

