<?php


spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require_once('./' . $class . '.php');
});

class person{

  public $seat=array();

  public function __construct($name,$gender)
  {      
    $this->seat['name']=$name;
    $this->seat['gender']=$gender;
  }

}



?>