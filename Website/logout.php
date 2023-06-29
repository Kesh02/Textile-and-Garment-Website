<?php
 session_start();
 
if(isset($_SESSION['id']))
{
 session_destroy();
 echo "<script>alert('Logged out');window.location.href = 'home.php';</script>";
 
}
elseif(isset($_SESSION['username']))
{
 session_destroy();
 echo "<script>alert('Logged out');window.location.href = 'home.php';</script>";
 
}
else 
{
 echo "<script>alert('You have to login');window.location.href = 'home.php';</script>";
}
?>