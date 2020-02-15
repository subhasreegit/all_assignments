<?php 
//in this file we called the required functions and made the objects to find the results

  
  spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require_once('./' . $class . '.php');
  });

  //Here we made the object of product_details class to get the product array
  $DetailsProductObj=new ProductDetails();

  //Here we made the object of Function class
  $AsenDing=new Functions();

  //Here we are calling the Asc_sort function to sort the array
  $DetaiLs2=$AsenDing->AscSort($DetailsProductObj->ProductDetails);

  //consucitive_value_add function is called to add the consecutive data and concatination
  $DetaiLs3=$AsenDing->ConsucitiveValueAdd($DetaiLs2);

  //key_change function is called to change the key value of the output array
  $DetaiLs4=$AsenDing->keyChange($DetaiLs3);

  //here the output is printed
  echo "<pre>";
  print_r($DetaiLs4);
  echo "</pre>";

  