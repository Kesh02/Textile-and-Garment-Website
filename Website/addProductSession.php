<?php
session_start();
//echo $_SESSION["First_Name"];
if(isset($_SESSION["id"]))
{ //echo "fghgfhbgt";
 echo "<script>alert('You are not a supplier'); window.location.href = 'Home.php';</script>";
 //echo header("Location: Payment.php");
}

elseif(isset($_SESSION["username"]))
{

  header("location:addProduct.php");

}
else{
  echo "<script>alert('You have to login'); window.location.href = 'Home.php';</script>";

}

?>