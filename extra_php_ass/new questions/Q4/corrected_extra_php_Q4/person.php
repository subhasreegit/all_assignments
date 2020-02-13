<?php//here weare making the sitting arrangement

class person {
  public $seat=array();
  public function __construct($name,$gender) {      
    $this->seat['name']=$name;
    $this->seat['gender']=$gender;
  }

}



