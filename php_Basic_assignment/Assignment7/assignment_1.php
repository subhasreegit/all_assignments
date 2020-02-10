<?php
session_start();

    if(isset($_SESSION['USERID'])){        
    }
    else{
        header('Location:/assignment7.php');
    }
?>





<html>
<head>
    <title>Assignment7</title> 
    <script src="/ass_5.js"></script>   
    <link rel="stylesheet" type="text/css" href="final.css">
    <link rel="stylesheet" type="text/css" href="Css_design.css">

</head>

<body>
        <div class="container">
            <div class="first">
                <a href="/logout.php"><button> Sign out</button></a>
            </div>

            <div class="act">
                <h3>FILL UP YOUR NAME DETAILS</h3>
                <hr>
            <form action="" method="POST">
                 <label>Firstname</label><br>
                <input type="text" pattern="[a-zA-Z]{1,}"  name="artistfield_fname" id="Artist_fname"   required/><br>
                <label>Lastname</label><br>
                <input type="text"  pattern="[a-zA-Z]{1,}" name="artistfield_lname" id="Artist_lname" onchange="SetFullName()" required/><br>       
                <label>Full-Name</label><br>
                <input type="text" name="artistfield_fullname" id="Artist_fullname" Disabled required/><br><br>
                <input type="submit" name="submit" id="submit" value="View">
            </form>
                    <?php
                        include 'hello.php';
                    ?> 
    
           </div>
    
             <div class="footer">
            <div class="pagination">
                <a href="welcome.php">&laquo;previous</a>
                <a href="welcome.php" >Home</a>
                <a href="/assignment_1.php" class="active">1</a>
                <a href="/assignment2.php">2</a>
                <a href="/assignment3.php">3</a>
                <a href="/assignment_4.php">4</a>
                <a href="/assignment5.php">5</a>
                <a href="/assignment6.php">6</a>
                <a href="/assignment2.php">next&raquo;</a>
            </div>

         </div>   

        

    </body>
</html>






