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
            <h3>ENTER YOUR MARKS DETAILS:</h3>
            <hr>
             <form action="" method="POST" enctype="multipart/form-data">
                <!--Through this tag the user input is taken and the format is also mentioned.-->
                <label>Enter Marks in each Subject in Each row in the pattern "English|"Obtained Marks":</label><br>
                <textarea type="text" name="text1" id="text1" height='500';width='500' pattern="[a-zA-Z]|[0-"></textarea><br>
                <input type="submit"  name="upload" value="View"><br>
            </form>
            <?php        
                include 'hello3.php';
            ?>
        </div>

        <div class="footer">
            <div class="pagination">
                <a href="/assignment2.php">&laquo;previous</a>
                <a href="#" >Home</a>
                <a href="/assignment_1.php">1</a>
                <a href="/assignment2.php">2</a>
                <a href="/assignment3.php"  class="active">3</a>
                <a href="/assignment_4.php">4</a>
                <a href="/assignment5.php">5</a>
                <a href="/assignment6.php">6</a>
                <a href="/assignment_4.php">next&raquo;</a>
            </div>
        </div>
    </div>
</body>
</html>







