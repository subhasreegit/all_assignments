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
    <link rel="stylesheet" type="text/css" href="final.css">
    <link rel="stylesheet" type="text/css" href="Css_design.css">

</head>

<body>
    <div class="container">
        <div class="first">
            <a href="/logout.php"><button> Sign out</button></a>
        </div>
        <div class="act">
            <h3>ENTER YOUR EMAIL ADDRESS</h3>
            <hr>
            <form action="" method="POST">
                <lable>Input your Email:</lable><br>
                <input type="text" name="email" id="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"  required><br><br>
                <input type="submit"  name="upload"><br>
            </form>
            <?php
                include 'hello5.php';
            ?>
        </div>

        <div class="footer">
            <div class="pagination">
                <a href="/assignment_4.php">&laquo;previous</a>
                <a href="#" >Home</a>
                <a href="/assignment_1.php">1</a>
                <a href="/assignment2.php">2</a>
                <a href="/assignment3.php">3</a>
                <a href="/assignment_4.php">4</a>
                <a href="/assignment5.php"  class="active">5</a>
                <a href="/assignment6.php">6</a>
                <a href="/assignment6.php">next&raquo;</a>
            </div>
        </div>
</body>
</html>









<!DOCTYPE html>
<html>
    <head>
        <title>My Page</title>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
   

    </head>
    <body>
        
        
    </body>    
</html>





<?php
        include 'hello5.php';
    ?>