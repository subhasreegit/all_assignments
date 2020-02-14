<?php//here we are calling all the functions to get the required object
    
    
  spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require_once('./' . $class . '.php');
  }); 

    
  $student_personal_obj=new student_personal_data();//here we are making the object of student_personal_data class

    
  //making array of object of student_data class
  for($i=0;$i<count($student_personal_obj->student_personal);$i++) {
    $student_obj[$i]= new student_data($student_personal_obj->student_personal[$i]['id'],$student_personal_obj->student_personal[$i]['name'],date('m/d/Y',$student_personal_obj->student_personal[$i]['dob']),$student_personal_obj->student_personal[$i]['grade']);
  }

  $subject_details_obj[12]=new subject_details('English','E',20,'Math','M',25,'Science','S',20);//making the object of subject_deails class 

  $function_obj=new functions();
  $array_data=array();
  $array_data=$function_obj->grade(12,$subject_details_obj);//calling grade function
  $marks_details_obj[0]=new student_marks('st1','E',20,'M',15,'S',13);//creating object of student_marks
  $function_obj->output($student_obj,$array_data,$marks_details_obj);//calling the output class


?>