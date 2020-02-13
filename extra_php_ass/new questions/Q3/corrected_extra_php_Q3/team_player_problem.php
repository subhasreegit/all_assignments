<?php//here we are including the classes and calling the funtions
    
    
  spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
     require_once('./' . $class . '.php');
  });

  //creating the array of object of Team class
  $team_obj['T1']= new Team('a1','a2','a3','a4');
  $team_obj['T2']= new Team('b1','b2','b3','b4');
  $team_obj['T3']= new Team('c1','c2','c3','c4');
  $team_obj['T4']= new Team('d1','d2','d3','d4');

  //creating the objects of Match class
  $match_obj['M1']=new Match('A','a1','a2','a3','a4',80,75,65,90,'B','b1','b2','b3','b4',70,70,67,95);
  $match_obj['M2']=new Match('A','a1','a2','a3','a4',20,15,80,90,'C','c1','c2','c3','c4',50,80,69,90);
  $match_obj['M3']=new Match('A','a1','a2','a3','a4',60,55,65,99,'D','d1','d2','d3','d4',70,70,7,92);
  $match_obj['M4']=new Match('B','b1','b2','b3','b4',87,73,45,90,'C','c1','c2','c3','c4',90,10,62,59);
  $match_obj['M5']=new Match('D','d1','d2','d3','d4',80,75,15,20,'B','b1','b2','b3','b4',70,70,77,95);
  $match_obj['M6']=new Match('D','d1','d2','d3','d4',58,95,25,9,'C','c1','c2','c3','c4',17,7,67,71);

  $function_obj=new functions();//object of functions class
  $function_obj->heighest_score($match_obj);//calling function heighest_score
  $function_obj->heighest_match_score($match_obj);//calling function heighest_match_score
  $function_obj->tournament_winner($match_obj);//calling function tournament_winner


