<?php/*here we are making the objects of ddifferent classes and executing the required answer*/

  spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require_once('./' . $class . '.php');
  });  

    
  $clg_data_obj=new clg();//object of clg class

  for($i=0;$i<count($clg_data_obj->clg_data);$i++) {
    $clg_obj[$i]=new college($clg_data_obj->clg_data[$i]['id'],$clg_data_obj->clg_data[$i]['clg_name']);
  }

      

  $doc_data=new document_details();//object of document_details class
  for($i=0;$i<count($doc_data->document);$i++){
    $doc[$i]=new clg_details($doc_data->document[$i]['doc_name'],$doc_data->document[$i]['doc_type'],$doc_data->document[$i]['doc_college'],$doc_data->document[$i]['status']);
  }
  $function_obj=new functions();//object of function class
    
  $function_obj->output($clg_obj,$doc);//call the output function from functions class


