<?php

class subject_details{

		public $subject_details=array();
		public function __construct($subject1,$code1,$pass1,$subject2,$code2,$pass2,$subject3,$code3,$pass3)
    	{
        	$this->subject_details[$subject1] =array('code'=>$code1,'mm'=>$pass1);
        	$this->subject_details[$subject2] =array('code'=>$code2,'mm'=>$pass2);
        	$this->subject_details[$subject3] =array('code'=>$code3,'mm'=>$pass3);
    	}
	}

?>