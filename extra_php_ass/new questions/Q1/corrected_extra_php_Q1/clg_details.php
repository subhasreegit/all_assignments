<?php
/*here we are making the array of object through this constructor class*/

/*Here we are making the college details array*/
class clg_details {
  public $details=array();
  public function __construct($doc_name,$doc_type,$doc_college,$sent)
  {
    $this->details=array('doc_college'=>$doc_college,'doc_name'=>$doc_name,'doc_type'=>$doc_type,'sent'=>$sent);   
  }

}

