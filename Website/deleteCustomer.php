<?php 
include("config.php");

session_start();

if (isset($_SESSION['id'])) {
    $userid = $_SESSION['id'];
    $sql = "DELETE  FROM customers WHERE Customer_ID=$userid";
    $result = mysqli_query($con, $sql);
    if ($result) {
        session_destroy();
      echo "<script>alert('Deleted'); window.location.href = 'Home.php';</script>";

        }
    }
    else {
	echo "Error: " . $con->error;
}



?>