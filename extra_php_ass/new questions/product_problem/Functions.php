<?php
 //here defined different functions to reach towards the output


//this function gives the sorted output depending upon the 'pd' and the 'sd'



class Functions {
    public function Asc_sort($array) {        
      $price = array_column($array, 'pd');
      array_multisort($price, SORT_ASC, $array);        
     
      for($i=0;$i<count($array)-1;$i++) {          
        for($j=$i+1;$j<count($array);$j++) {            
          if($array[$i]['pd']==$array[$j]['pd']){              
            if($array[$i]['sd']>$array[$j]['sd']){
             
              $pd_temp=$array[$i]['pd'];
              $array[$i]['pd']=$array[$j]['pd'];
              $array[$j]['pd']=$pd_temp;

              $sp_temp=$array[$i]['sp'];
              $array[$i]['sp']=$array[$j]['sp'];
              $array[$j]['sp']=$sp_temp;

              $sd_temp=$array[$i]['sd'];
              $array[$i]['sd']=$array[$j]['sd'];
              $array[$j]['sd']=$sd_temp;

              $ct_temp=$array[$i]['ct'];
              $array[$i]['ct']=$array[$j]['ct'];;
              $array[$j]['ct']=$ct_temp;
                
            }
          }
        }
      }    
      return $array;       
    }

    //this function gives the output of the additon of consecutive data and concatination
    public function consucitive_value_add($array) {
      for($i=0;$i<count($array);$i++){
        if($i<count($array)-1) {
          if($array[$i]['pd']==$array[$i+1]['pd']){
            $array[$i+1]['sp']=$array[$i]['sp']+$array[$i+1]['sp'];
          }
        }
        $array[$i]['sd']==$array[$i]['sd']. " " .'2020';
        $date = date_create($array[$i]['sd']);
        $array[$i]['sd']=date_format($date, 'd/m/Y');

        if($array[$i]['pd']=='pd1' || $array[$i]['pd']=='pd3'){
          $array[$i]['ct']=$array[$i]['ct']."-"."P1";
        }
        else{
          $array[$i]['ct']=$array[$i]['ct']."-"."P2";
        }
      }
      return $array;
    }

    //here er are arranging and changing the key of the array depending upon the output
    public function key_change($array) {
      $k=0;
      foreach($array as $key=>$value) {
        foreach($value as $key1=>$value1) {
          //echo $key1;
          if($key1=='sp'){
            $array2[$key]['tsp']=$value1;
          }
          else{
            $array2[$key][$key1]=$value1;
          }
        }
      }
      return $array2;
    }    
}