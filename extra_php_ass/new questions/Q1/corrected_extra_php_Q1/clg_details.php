<?php
 class clg_details{
        public $details=array();
        public function __construct($doc_name,$doc_type,$doc_college,$sent)
        {
            $this->details=array('doc_college'=>$doc_college,'doc_name'=>$doc_name,'doc_type'=>$doc_type,'sent'=>$sent);            
        }

    }

?>