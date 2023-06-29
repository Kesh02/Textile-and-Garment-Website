<?php
include("config.php");

session_start();

if (isset($_SESSION["username"])) {
    $x = $_SESSION["username"];
     $sql = "DELETE FROM edit_supplier WHERE Supplier_Name='$x'";
     $result = mysqli_query($con, $sql);


    if ($result) 
    {
        session_destroy();
        echo"<script>alert('Deleted');window.location.href = 'Home.php';</script>";

    }
    else {
          echo"Error:".$con->error;
         }
    }

?>-