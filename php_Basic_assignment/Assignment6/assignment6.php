<?php
session_start();
    if(isset($_SESSION['USERID'])){
        
    }
    else{
        header('Location:/assignment7.php');
    }
?>







<!DOCTYPE html>
<html>
    <head>
        <title>My Page</title>
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
                <form action="http://localhost/hello6.php" method="POST" enctype="multipart/form-data">
                    <label><h2>DO YOU WANT TO DOWNLOAD THE FORM?</h2></label>
                    <hr>
                    <input type="submit" value="YES" name="sub1" id="sub1"><br><br>
                </form>
                <form action="http://localhost/new.php" method="POST" enctype="multipart/form-data">
                    <input type="submit" value="NO" name="sub1" id="sub1"><br><br>
                </form>
                <!--<a href="/new.php"><button class="button2">End the session</button></a>-->
            </div>
            <div class="footer">
                <div class="pagination">
                <a href="/welcome.php.php">&laquo;previous</a>
                <a href="/welcome.php" >Home</a>
                <a href="/assignment_1.php">1</a>
                <a href="/assignment2.php">2</a>
                <a href="/assignment3.php">3</a>
                <a href="/assignment_4.php">4</a>
                <a href="/assignment5.php">5</a>
                <a href="/assignment6.php" class="active">6</a>
            </div>
        </div>        
    </body>    
</html>


<?php
     
     if(isset($_GET["q"])){
            $requested_route = $_GET["q"];
            if($requested_route == '1')
            {
                header("location:assignment_1.php");
                exit;
            }
            if($requested_route == '2')
            {
                header("location:assignment2.php");
                exit;
            }
            if($requested_route == '3')
            {
                header("location:assignment3.php");
                exit;
            }
            if($requested_route == '4')
            {
                header("location:assignment_4.php");
                exit;
            }
            if($requested_route == '5')
            {
                header("location:assignment5.php");
                exit;
            }
            if($requested_route == '6')
            {
                header("location:assignment6.php");
                exit;
            }
            if($requested_route == '8')
            {
                header("location:new.php");
                exit;
            }
        }

        ?>