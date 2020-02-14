<?php 
//making the array of object of the clg details array

/*making the array of object through this class*/
class college {
  public $clg=array();
  public function __construct($id,$clg_name)
  {
    $this->clg=array($id=>$clg_name);           
  }
}

