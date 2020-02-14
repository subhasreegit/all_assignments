<?php// here we are making thefunctions through which we got the required output

class functions {//it returns heighest score
  function heighest_score($array) {
    $score=0;
    foreach($array as $key=>$value) {
      foreach($value as $key1=>$value1) {
        foreach($value1 as $key2=>$value2) {
          foreach($value2 as $key3=>$value3) {
            if($value3>$score){
              $score=$value3;
              $name=$key3;
            }
          }
        }
      }
    }
     echo "Heigest score is" . " " . $score . " " . "and Heighest scorer is" . " " . $name . "<br>";
  }


  function heighest_match_score($array) {//it returns heighest_match_score
    $score=0;
    $score1=0;
    $temp1=array();
      foreach($array as $key=>$value) {
        foreach($value as $key1=>$value1) {
          foreach($value1 as $key2=>$value2) {
            foreach($value2 as $key3=>$value3) {
              $score1=$score1+$value3;
            }
            if($score1>$score){
              $score=$score1;
            }
            $score1=0;
          }
        }
      }
      echo "Heigest match score is" . " " . $score . "<br>";
  }


  function tournament_winner($array) {//it returns tournament_winner
    $score=0;
    $score1=0;
    $temp=array();
    $temp1=array();
    foreach($array as $key=>$value) {
      foreach($value as $key1=>$value1) {
        foreach($value1 as $key2=>$value2) {
          foreach($value2 as $key3=>$value3) {
            $score1=$score1+$value3;
          }
          $temp1[$key][$key2]=$score1;
          $score1=0;
        }
      }
    }
    $k=0;
    foreach($temp1 as $key=>$value) {
      foreach($value as $key1=>$value1) {
        if($value1>$score1){
          $score1=$value1;
          $team=$key1;
        }
      }
      $temp[$k++]=$key1;
    }
    $m=$n=$o=$p=0;
    for($i=0;$i<count($temp);$i++) {
      if($temp[$i]=='A'){
        echo $temp[$i];
        $m++;
      }
      else if($temp[$i]=='B') {
         $n++;
      }
      else if($temp[$i]=='C') {
        $o++;
      }
      else if($temp[$i]=='D') {
        $p++;
      }
    }
    if($m>$n && $m>$o && $m>$p) {
      echo "Tournament Winner:" . " "  . 'A';
    }
    else if($n>$m && $n>$o && $n>$p) {
      echo "Tournament Winner:" . " " . 'B';
    }
    else if($o>$n && $o>$m && $o>$p) {
      echo "Tournament Winner:" . " " . 'C';
    }
    else{
      echo "Tournament Winner:" . " " . 'D';
    }
  }
}

