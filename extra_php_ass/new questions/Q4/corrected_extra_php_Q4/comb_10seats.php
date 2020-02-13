<?php
    
  include('position_class.php');
  include('seats_functions_class.php');
  include('random_person_class.php');


  $name_obj= new name();
  for($i=0;$i<count($name_obj->array);$i++)
  {
    $person_obj[$i]=new person($name_obj->array[$i]['name'],$name_obj->array[$i]['gender']);
  }       

  $person_obj2= new functions();
  $person_obj2->position($person_obj);

            


?>