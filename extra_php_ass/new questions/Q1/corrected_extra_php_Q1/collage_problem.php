<?php

    spl_autoload_register(function($class) {
      $class = str_replace('\\', '/', $class);
      require_once('./' . $class . '.php');
    });  

    


    $clg_obj[0]=new college('C1','NiT');
    $clg_obj[1]=new college('C2','GNIT');
    $clg_obj[2]=new college('C3','JIS');

    

    $doc[0]=new clg_details('student_data','A','C1','1');
    $doc[1]=new clg_details('student_marks_1','B','C2','0');
    $doc[2]=new clg_details('student_marks_2','B','C1','1');
    $doc[3]=new clg_details('student_personal_details','C',' ','1');


    $function_obj=new functions();
    
    $function_obj->output($clg_obj,$doc);


?>