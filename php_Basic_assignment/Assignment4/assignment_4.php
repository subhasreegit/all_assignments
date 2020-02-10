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
            <h3>PUT YOUR CONTACT DETAILS</h3>
            <hr>
            <form action="" method="POST" enctype="multipart/form-data">
                <label>Contact Number:</label><br><!--through this we have taken the input and checked with the pattern with the required fiels-->
                <input type="text" name="ph_no" id="ph_no" placeholder="+91" pattern="[+91]{3}[1-9]{1}[0-9]{9}" onchange="SetNumber()" required/><br><br>
                <input type="submit" value="VIEW" name="upload"><br>
            </form>
            <?php
                include 'hello4.php';
            ?>
        </div>
        
    
        <div class="footer">
        <div class="pagination">
            <a href="/assignment3.php">&laquo;previous</a>
            <a href="#" >Home</a>
            <a href="/assignment_1.php">1</a>
            <a href="/assignment2.php">2</a>
            <a href="/assignment3.php">3</a>
            <a href="/assignment_4.php"  class="active">4</a>
            <a href="/assignment5.php">5</a>
            <a href="/assignment5.php">6</a>
            <a href="/assignment5.php">next&raquo;</a>
        </div>
    </div>
</div>



</body>
</html>

