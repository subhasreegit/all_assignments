<?php//here we are making the match details class and array of object

class Match {
  public $match_details=array();
  public function __construct($t1,$p1,$p2,$p3,$p4,$s1,$s2,$s3,$s4,$t2,$pt1,$pt2,$pt3,$pt4,$st1,$st2,$st3,$st4) {
    $this->match_details=array($t1=>array($p1=>$s1,$p2=>$s2,$p3=>$s3,$p4=>$s4),
                                        $t2=>array($pt1=>$st1,$pt2=>$st2,$p3=>$st3,$p4=>$st4));          
    }
  }

