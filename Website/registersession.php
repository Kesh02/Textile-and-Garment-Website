<?php
session_start();

	$query = "SELECT Supplier_ID FROM edit_supplier WHERE Supplier_Name='$username'";
    $username = $_POST['cname'];
  
    
  
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
       
        $_SESSION["username"] = $username;
      
        header("Location: home.html");
        die;
    }
    else
{
   echo "<script>alert('Wrong Username'); window.location.href = 'Login.html';</script>";

}



?>