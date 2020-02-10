<?php
    /*if ($_SERVER['REQUEST_METHOD'] == 'POST'){*/
    if(isset($_POST["user_choice"])){
        $ComputerChoice = array('Rock', 'paper', 'Scissors');
        shuffle($ComputerChoice);
        $Computer = $ComputerChoice[0];
        $User = $_POST['user_choice'];
        echo 'Player: '.$User.' <br>CPU: '.$Computer;
        if($User == $Computer){
            echo '<br>Result: Tie!';
        }
        else if($User == "Rock"){
            if($Computer == "Scissors") {
                echo '<br>Result: User wins';
            } else {
                echo '<br>Result: CPU wins';
            }
            
        }
        else if($User == "paper") {
            if($Computer == "Rock") {
                echo '<br>Result: User wins';
                }else {
                    if($Computer == "Scissors") {
                        echo '<br>Result: Computer wins';
                    }
                }
                
            }
            else if($User == "Scissors") {
                if($Computer== "Rock") {
                    echo '<br>Result: CPU wins';
                } else {
                    if($Computer == "paper") {
                        echo '<br>Result: User wins';
                    }
                }
                
            }
        }
        
    
?>