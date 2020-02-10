<html>
<head>
	<title> The login Page</title>	
	<link rel="stylesheet" type="text/css" href="1st_page.css">
</head>


<body>

	<div class="page1">
		<div class="heading">
			<h2>LOG IN</h2>
		</div>
		<form action="" method="post">
			<label>USERNAME</label><br>
            <input type="text"  name="userid" id="userid" placeholder="USERID" required/><br><br>
            <label>PASSWORD</label><br>
            <input type="password" name="pass_word" id="pass_word" placeholder="PASSWORD" required/><br><br>
            <input type="submit" name="submi_t" id="submi_t">
            <a href="./forgot_login_page2.php">Forgot Password</a>
		</form>
		<!-- <a href="./forgot_login_page2.php">Forgot Password</a> -->
		<?php
			include 'right_password.php';
		?>
	</div>
</body>
</html>