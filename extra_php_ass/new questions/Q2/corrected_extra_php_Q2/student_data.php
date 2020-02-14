<?php//here we are taking the student data

//Through this we are taking the student personal data
class student_data {
  public $s_data=array();
  public function __construct($id,$name,$dob,$grade)
  {
    $this->s_data['id'] = $id;
    $this->s_data['name'] = $name;
    $this->s_data['dob'] = $dob;
    $this->s_data['grade'] = $grade;
  }
}