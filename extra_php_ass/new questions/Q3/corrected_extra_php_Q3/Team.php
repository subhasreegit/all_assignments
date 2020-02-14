<?php//making the team details class 

class Team {
  public $team_details=array();
  public function __construct($p1,$p2,$p3,$p4) {
    $this->team_details=array($p1,$p2,$p3,$p4);         
  }
}
