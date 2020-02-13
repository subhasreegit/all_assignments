<?php

class college{
        public $clg=array();
        public function __construct($id,$clg_name)
        {
            $this->clg=array($id=>$clg_name);           
        }
    }

?>