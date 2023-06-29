<?php
 session_start();
if(isset($_SESSION['id']))
    {
        echo "<script>alert('You are already logged in! You have to log out before registering'); window.location.href = 'Home.php';</script>";
    }

?>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="login.css"> 
	</head>

	<body>
		<div class="loginbox">
		<img src = "log.png" alt="Logo" class="avatar">
			<h1>Register Here</h1>
			<form method="POST" action ="insertCustomers.php">

				<p>Create username</p>
				<input type="text" name="cname" placeholder="Create username"><br>
				<p>Password</p>
				<input type="password" name="cpassword" placeholder="Create password"><br>
				<p>Email</p>
				<input type="email" name="cemail" placeholder="Enter email">
				<p>Mobile number</p>
				<input type="text" name="cmobileno" placeholder="Mobile number"><br><br>
				<input type="submit" name="submit" value="Register" style="text-align: center;background:gray;color:white;height: 35px;
				width: 100px; margin-top: 2%; font-size: 18px">
			</form>
		</div>		
		
		
		
		
	</body>

</html>