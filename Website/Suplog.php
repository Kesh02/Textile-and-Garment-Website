<?php
include("config.php");
session_start();
if (isset($_POST['submit']))
	{
	
    $username = $_POST['cname'];
    $password = $_POST['cpassword'];
    $query = "SELECT Customer ID,Username, Password FROM customers WHERE Username='$username' AND Password='$password'";
  
    $result = $con->query($query);

    if ($result->num_rows > 0) {
       
        $_SESSION["username"] = $username;
      
        header("Location: home.html");
        die;
    }
    else
{
   echo "<script>alert('Wrong Username or Password'); window.location.href = 'Login.html';</script>";

}
}


//session_write_close();
?>