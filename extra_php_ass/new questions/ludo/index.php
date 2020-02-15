<?php

/**
*Here in this file the objects of different classes are created and the functions are called to get the result of the required output.
**/
  
  spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require_once('./' . $class . '.php');
  });

  //here used gazzle api to decode the file.
  use GuzzleHttp\Client;
  use GuzzleHttp\Message\Request;
  use GuzzleHttp\Message\Response;

  require ('../vendor/autoload.php');

  $cliEnt = new GuzzleHttp\Client();
  
  $ResPonse = $cliEnt->request('GET','http://learning.architbohra.com/ludo_json.php');
  $responseBody = $ResPonse->getBody();
  $JsonDecode = json_decode($responseBody);

  $YoGita = '1';
  $ZuBin = ['1','2','3'];
  $ResultObj = new Functions();
  
  //the object of dice class
  $DiceObj = new diCe();

  //called the function OutputDetection function and storing the output of the result in a array from the sample input array
  $ReSult1 = $ResultObj->OutputDetection($DiceObj->diCe,$YoGita,$ZuBin);
  
  //printing the data
  echo "<b>"."Sample Output:"."</b>"."<br>";
  for($i=0 ; $i<count($ReSult1) ; $i++) {
    echo $ReSult1[$i] . "<br>";
  }
  echo "<hr>" . "</hr>";

  //calling the OutputDetection function to find the output from the api and storing the in a array
  $ReSult2 = $ResultObj->OutputDetection($JsonDecode,$YoGita,$ZuBin);
    
  //printing the data
   echo "<b>"."From the input json format Output:"."</b>"."<br>";
  for($i=0 ; $i<count($ReSult2) ; $i++){
    echo $ReSult2[$i] . "<br>";
  }
    


