<?php
	
	class Team{
		public $team_details=array();
		public function __construct($p1,$p2,$p3,$p4)
    	{
        	$this->team_details=array($p1,$p2,$p3,$p4);        	
    	}
	}


	class Match{

		public $match_details=array();
		public function __construct($t1,$p1,$p2,$p3,$p4,$s1,$s2,$s3,$s4,$t2,$pt1,$pt2,$pt3,$pt4,$st1,$st2,$st3,$st4)
    	{
        	$this->match_details=array($t1=>array($p1=>$s1,$p2=>$s2,$p3=>$s3,$p4=>$s4),
        								   $t2=>array($pt1=>$st1,$pt2=>$st2,$p3=>$st3,$p4=>$st4));        	
    	}
	}





	class functions{

		function heighest_score($array){
			$score=0;
			foreach($array as $key=>$value){
				foreach($value as $key1=>$value1){
					foreach($value1 as $key2=>$value2){
						foreach($value2 as $key3=>$value3){
							if($value3>$score){
								$score=$value3;
								$name=$key3;
							}
						}
					}
				}
			}
			echo "Heigest score is"." ".$score." "."and Heighest scorer is"." ".$name."<br>";
		}


		function heighest_match_score($array){
			$score=0;
			$score1=0;
			$temp1=array();
			foreach($array as $key=>$value){
				foreach($value as $key1=>$value1){
					foreach($value1 as $key2=>$value2){
						foreach($value2 as $key3=>$value3){
								$score1=$score1+$value3;
						}
						if($score1>$score){
							$score=$score1;
						}
						$score1=0;
					}
				}
			}
			echo "Heigest match score is"." ".$score."<br>";
		}


		function tournament_winner($array){
			$score=0;
			$score1=0;
			$temp=array();
			$temp1=array();
			foreach($array as $key=>$value){
				foreach($value as $key1=>$value1){
					foreach($value1 as $key2=>$value2){
						foreach($value2 as $key3=>$value3){
								$score1=$score1+$value3;
						}
						$temp1[$key][$key2]=$score1;
						$score1=0;
					}
				}
			}
			$k=0;
			foreach($temp1 as $key=>$value){
				foreach($value as $key1=>$value1){
					if($value1>$score1){
						$score1=$value1;
						$team=$key1;
					}
				}
				$temp[$k++]=$key1;
			}
			$m=$n=$o=$p=0;
			for($i=0;$i<count($temp);$i++){
				if($temp[$i]=='A'){
					echo $temp[$i];
					$m++;
				}
				else if($temp[$i]=='B'){
					$n++;
				}
				else if($temp[$i]=='C'){
					$o++;
				}
				else if($temp[$i]=='D'){
					$p++;
				}
			}
			if($m>$n && $m>$o && $m>$p){
				echo "Tournament Winner:"." ".'A';
			}
			else if($n>$m && $n>$o && $n>$p){
				echo "Tournament Winner:"." ".'B';
			}
			else if($o>$n && $o>$m && $o>$p){
				echo "Tournament Winner:"." ".'C';
			}
			else{
				echo "Tournament Winner:"." ".'D';
			}
		}
	}

	$team_obj['T1']= new Team('a1','a2','a3','a4');
	$team_obj['T2']= new Team('b1','b2','b3','b4');
	$team_obj['T3']= new Team('c1','c2','c3','c4');
	$team_obj['T4']= new Team('d1','d2','d3','d4');

	$match_obj['M1']=new Match('A','a1','a2','a3','a4',80,75,65,90,'B','b1','b2','b3','b4',70,70,67,95);
	$match_obj['M2']=new Match('A','a1','a2','a3','a4',20,15,80,90,'C','c1','c2','c3','c4',50,80,69,90);
	$match_obj['M3']=new Match('A','a1','a2','a3','a4',60,55,65,99,'D','d1','d2','d3','d4',70,70,7,92);
	$match_obj['M4']=new Match('B','b1','b2','b3','b4',87,73,45,90,'C','c1','c2','c3','c4',90,10,62,59);
	$match_obj['M5']=new Match('D','d1','d2','d3','d4',80,75,15,20,'B','b1','b2','b3','b4',70,70,77,95);
	$match_obj['M6']=new Match('D','d1','d2','d3','d4',58,95,25,9,'C','c1','c2','c3','c4',17,7,67,71);

	$function_obj=new functions();
	$function_obj->heighest_score($match_obj);
	$function_obj->heighest_match_score($match_obj);
	$function_obj->tournament_winner($match_obj);


?>