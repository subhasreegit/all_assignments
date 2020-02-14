<?php 
//in this file we called the required functions and made the objects to find the results

  
  spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require_once('./' . $class . '.php');
  });

  $details1=array();
  //Here we made the object of product_details class to get the product array
  $details_product_obj=new product_details();

  //Here we made the object of Function class
  $asending=new Functions();

  //Here we are calling the Asc_sort function to sort the array
  $details2=$asending->Asc_sort($details_product_obj->product_details);

  //consucitive_value_add function is called to add the consecutive data and concatination
  $details3=$asending->consucitive_value_add($details2);

  //key_change function is called to change the key value of the output array
  $details4=$asending->key_change($details3);

  //here the output is printed
  echo "<pre>";
  print_r($details4);
  echo "</pre>";

  