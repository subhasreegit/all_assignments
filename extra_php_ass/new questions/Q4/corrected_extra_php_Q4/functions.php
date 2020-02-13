<?php

class functions{

  public function position($array){           
    $k=0;
    $array2=array();
    foreach($array as $key=>$value){
      foreach($value as $key1=>$value1){
        foreach($value1 as $key2=>$value2){
          $array2[$k]=$value2;
          $k=$k+1;
        }
      }       
    }
    
    $count=count($array2);
    for($n=1;$n<$count-4;$n=$n+2){
      if($array2[$n]=='F'){
        if($array2[$n+2]=='F'){
          if($array2[$n+4]=='F'){
            if(($n+4)==($count-1)){
              $temp_name=$array2[0];
              $temp_gender=$array2[1];
              $array2[0]=$array2[$n+1];
              $array2[1]=$array2[$n+2];
              $array2[$n+1]=$temp_name;
              $array2[$n+2]=$temp_gender;
            }
            else{
              $temp_name=$array2[$count1-1];
              $temp_gender=$array2[$count1];
              $array2[$count1-1]=$array2[$n+1];
              $array2[$count1]=$array2[$n+2];
              $array2[$n+1]=$temp_name;
              $array2[$n+2]=$temp_gender;
             }
          }
          else{
            if(($n+2)==($count-2)){
              $temp_name=$array2[$n+1];
              $temp_gender=$array2[$n+2];              
              $array2[$n+1]=$array2[$count-2];
              $array2[$n+2]=$array2[$count-1];
              $array2[$count-2]=$temp_name;
              $array2[$count-1]=$temp_gender;
             }
            else{
              if($array[$n+6]=='F'){
              $temp_name=$array2[$n+7];
              $temp_gender=$array2[$n+8];
              $array[$n+7]=$array[$count-2];
              $array[$n+8]=$array[$count-1];
            }
          }
        }
      }
    }
  }
  echo "<table border=2px>";
  for($k=0;$k<$count;$k++){
    if($k%2==0 || $k==0){
      echo "<td>".$array2[$k]."</td>"/*"<br>"*/;
    }
  }
  echo "</table>";
}
        
}


?>