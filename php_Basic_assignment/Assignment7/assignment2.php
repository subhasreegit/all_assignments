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
                <h3>PICTURE DETAILS</h3>
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">
                    <lable>Input your passport size photograph:</lable><br><br>
                    <input type="file" name="file"><br><br>
                    <input type="submit"  name="upload" value="view"><br>
                </form>
                <?php
                    include 'hello2.php';
                 ?>
        </div>

        <div class="footer">
            <div class="pagination">
                <a href="/assignment_1.php">&laquo;previous</a>
                <a href="welcome.php">Home</a>
                <a href="/assignment_1.php">1</a>
                <a href="/assignment2.php" class="active">2</a>
                <a href="/assignment3.php">3</a>
                <a href="/assignment_4.php">4</a>
                <a href="/assignment5.php">5</a>
                <a href="/assignment6.php">6</a>
                <a href="/assignment3.php">next&raquo;</a>
            </div>
        </div>
    </div>



</body>
</html>

















