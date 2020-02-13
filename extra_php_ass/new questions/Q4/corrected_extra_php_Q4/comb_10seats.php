<?php
    
      spl_autoload_register(function($class) {
      $class = str_replace('\\', '/', $class);
      require_once('./' . $class . '.php');
    });  


  $name_obj= new name();
  for($i=0;$i<count($name_obj->array);$i++)
  {
    $person_obj[$i]=new person($name_obj->array[$i]['name'],$name_obj->array[$i]['gender']);
  }       

  $person_obj2= new functions();
  $person_obj2->position($person_obj);