<?php
session_start();
    if(!isset($_SESSION['USERID'])){
        header('Location:/assignment7.php');
    }
?>





<!DOCTYPE html>
<html>
    <head>
        <title>My Page</title>
    <script src="/ass_5.js"></script>
    <link rel="stylesheet" type="text/css" href="final.css">
   

    </head>
    <body>

        <div class="first">
        <a href="/logout.php"><button> Sign out</button></a>
        </div>


        </body>
        </html>





<?php
	
	echo "<h1>"."Thank you"." ".$_SESSION['firstname']." "." for attending the session.Now you can Sign out the session."."</h1>";

?>