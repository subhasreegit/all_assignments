<?php//here we are taking the students marks

  //Here er are taking the students marks 
  class student_marks {
    public $marks_details=array();
    public function __construct($id,$code1,$marks1,$code2,$marks2,$code3,$marks3){
      $this->marks_details[$id]=array($code1=>$marks1,$code2=>$marks2,$code3=>$marks3);
    }
  }