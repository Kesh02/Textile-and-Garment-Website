<?php

//create connection
$con= new mysqli("localhost","root","","textile"); //creating connection object

//check connection
if($con->connect_error){
	die("Connection failed: ". $con->connect_error);
}


?>

