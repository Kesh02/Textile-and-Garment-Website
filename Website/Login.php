<?php
 session_start();
if(isset($_SESSION['id']))
    {
        echo "<script>alert('You are already logged in!'); window.location.href = 'Home.php';</script>";
    }

?>

<html>
	<head>
		<title>Log in</title>
		<link rel="stylesheet" href="login.css"> 
	</head>

	<body>
		<div class="loginbox">
		<img src = "log.png" alt="Logo" class="avatar">
			<h1>Login Here</h1>
			<form method="post" action ="LoginSession.php">
				<p>Username</p>
				<input type="text" name="cname" placeholder="Enter username">
				<p>Password</p>
				<input type="password" name="cpassword" placeholder="Enter password"><br><br>
				<p><i><a href="Createpw.html">Forgot your password?</a></i></p>
				<input type="submit" name="submit" value="Log in" style="background:gray;color:white;height: 35px;
				width: 100px; margin-top: 20px; font-size: 18px">
			</form>
		</div>		
		
		
		
		
	</body>

</html>