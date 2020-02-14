<?php
/*here we are making the objects of ddifferent classes and executing the required answer*/

  spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require_once('./' . $class . '.php');
  });  

    
  //object of clg class
  $clg_data_obj=new clg();

  for($i=0;$i<count($clg_data_obj->clg_data);$i++) {
    $clg_obj[$i]=new college($clg_data_obj->clg_data[$i]['id'],$clg_data_obj->clg_data[$i]['clg_name']);
  }

      
  //object of document_details class
  $doc_data=new document_details();
  for($i=0;$i<count($doc_data->document);$i++){
    $doc[$i]=new clg_details($doc_data->document[$i]['doc_name'],$doc_data->document[$i]['doc_type'],$doc_data->document[$i]['doc_college'],$doc_data->document[$i]['status']);
  }
  //object of function class
  $function_obj=new functions();
    
  //call the output function from functions class
  $function_obj->output($clg_obj,$doc);


