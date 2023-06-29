<?php

//linking config file
require'config.php';


$username = $_POST["cname"];
$password = $_POST["cpassword"];
$email = $_POST["cemail"];
$mobileno = $_POST["cmobileno"];


$sql = "INSERT INTO customers(Username,Password,Email,MobileNo) VALUES('$username','$password','$email','$mobileno')";

if($con->query($sql))
{
	echo "<script>alert('Inserted user details to the database successfully!'); window.location.href = 'Login.php';</script>";
	
	
}
else
{
	echo"error".$con->error;
	
}

// if($result->num_rows>0)
// {
	// //read data
	// while($row = $result->fetch_assoc())
	// {
		// //read and utilize row data
		// // $dbusername=$row["Username"];
		// // $dbpassword=$row["Password"];
		// // echo "Data was read";
		
		// echo $row["Username"]. "-" .$row["Password"]."<br/>";
	// }
// }
// else
// {
	// echo"No data found";
// }


//closing the connection
$con->close();

?>