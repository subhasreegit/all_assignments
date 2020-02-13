<?php/*Here all the functions are finding the required results*/

/*This function is checking the send is successfull or failed*/
class functions {      
  public function status2($val) {
    if($val==1) {
      return 'Success';
    }
    else {
      return 'Fail';
    }
  }

  /*This function is retrning the required output*/
  public function output($array1,$array2) {
    $j=0;
    $cid=array();
    $clg=array();
    foreach($array1 as $key=>$value) {
      foreach($value as $key1=>$value1) {
        foreach($value1 as $key2=>$value2) {
          $cid[$j]=$key2;
          $clg[$j++]=$value2;
        }
      }
    }
    $m=0;
    $temp=array();
      $a=0;
      foreach($array2 as $key=>$value) {
        foreach($value as $key1=>$value1) {
          foreach($value1 as $key2=>$value2) {
            $temp[$key2]=$value2;
            if($key2=='doc_college' && $value2==" ") {
              $temp_val=$key;
              break;
            }            
          }
        }
      }
      $c=count($cid);
      $n=0;
      $m=0;
      echo "<table border=2px>";
      echo "<tr>";
      echo "<td>" . "College ID " . "</td>" . "<td>" . "College Name" . "</td>" . "<td>" . "Document Name" . "<td>" . "Document type" . "</td>" . "<td>" . "Document Status" . "</td>";      
      foreach($array2 as $key=>$value){
        echo "<tr>";
        if($m<$c){
        echo "<td>" . $cid[$m] . "</td>";
        echo "<td>" . $clg[$m++] . "</td>";
        foreach($value as $key1=>$value1){
          foreach($value1 as $key2=>$value2){
            if($key2!='doc_college' && $key!=$temp_val)
              if($value2=='1' || $value2=='0'){
                echo "<td>" . $this->status2($value2) . "<br>" . $this->status2($temp[$key2]) .  "</td>";
              } else {
                echo "<td>" . $value2 . "<br>" . $temp[$key2] . "</td>";
              }
            }      
          }
        }  
      }
    }
  }
}


