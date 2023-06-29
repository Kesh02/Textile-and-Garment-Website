<?php

session_start();
include("config.php");

    if (isset($_POST['submit'])) {
        $username = $_POST['cname'];
        $password = $_POST['cpassword'];
        $sql = "SELECT Customer_ID, Username, Password FROM customers WHERE Username='$username' AND Password='$password'";
  
        $result = $con->query($sql);
    
        // Check if any rows were returned
        if ($result->num_rows > 0) {
            // Fetch the first row to get the Customer_ID and store it in the session
            while ($row = $result->fetch_assoc()) {
                $_SESSION["id"] = $row["Customer_ID"];
                echo "<script>alert('Successfully logged in!'); window.location.href = 'Home.php';</script>";
                //die;
            }
        } 
        else 
        {
            echo "<script>alert('Wrong Username or Password'); window.location.href = 'Login.php';</script>";
        }
    }

?>
