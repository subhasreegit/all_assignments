<?php

/**
*Here we declared a function to predict the output of the program
**/

class Functions {

  public function OutputDetection($array,$a,$b) {
    
    $x = $y = 0;
    $k = 0;
    $l = 0;
    $m =0;
    $DupLicate = $b;
    $YogitaTurn = 'T';
    $ZubinTurn = 'F';
    for($i = 0 ; $i<count($array) ; $i++) {
      //Here we are splitting the stig nd checking with the required value
      for($j = 0 ; $j <strlen($array[$i]) ; $j++){
        if($YogitaTurn == 'T' && $ZubinTurn == 'F') {
          if($array[$i][$j] == '1') {
            $m++;
            $y++;
            $x=$x+$m;
            $temp[$i] = "Yogita won the game#".($i+1)." In $m Turns";
            break;
          }
          else {
            $m++;
            $ZubinTurn = 'T';
            $YogitaTurn = 'F';
          }
        }
        else {
          for($p=0 ; $p<count($b) ; $p++) {
            if($b[$p] == '0') {
              $k++;
            }
          }
          if($k == 3) {
            $x=$x+$m;
            $temp[$i] = "Zubin won the game#".($i+1)." In $m Turns";
            break;
          }
          else {
            $k = 0;
            for($p = 0 ; $p<count($b) ; $p++){
              if($b[$p] == $array[$i][$j]){
                $l++;
                $b[$p] = '0';
              }
            }
            if($l>0) {
              $m++;
              $l = 0;
              $YogitaTurn = 'F';
              $ZubinTurn = 'T';                
            }
            else {
              $m++;
              $YogitaTurn = 'T';
              $ZubinTurn = 'F';                  
            }
          }
        }
      }
      $m = 0;
      $k = 0;
      $b = $DupLicate;
      $YogitaTurn = 'T';
      $ZubinTurn = 'F';          
    }
    //counting the probablity
    $AverageTurn = round($x/count($array));
    //counting the average turn
    $Probablity = ($y/count($array))*100;
    $temp[$i++] = "The probablity of yogita to win is $Probablity%";
    $temp[$i] = "The average turn is $AverageTurn";
    return $temp;             
  }      
}
        
