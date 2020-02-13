<?php 


spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require_once('./' . $class . '.php');
});

class name{

  public $array=array(0=>array('name'=>'Anand Thakur',
                               'gender'=>'M'),
                      1=>array('name'=>'Shakti Ray',
                               'gender'=>'M'),
                      2=>array('name'=>'Gourav Gupta',
                               'gender'=>'M'),
                      3=>array('name'=>'Nirmallya Mondol',
                               'gender'=>'M'),
                      4=>array('name'=>'Ashim Banerjee',
                               'gender'=>'M'),
                      5=>array('name'=>'Ankush Sen',
                               'gender'=>'M'),
                      6=>array('name'=>'Subham Sinha',
                               'gender'=>'M'),
                      7=>array('name'=>'Aaishika Banerjee',
                               'gender'=>'F'),
                      8=>array('name'=>'Dyuti Shome',
                               'gender'=>'F'),
                      9=>array('name'=>'Sneha Hazra',
                               'gender'=>'F')
                     );
}


?>