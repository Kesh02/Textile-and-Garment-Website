
//linking config file
//require 'config.php';
<?php
 session_start();
if(isset($_SESSION['id']))
    {
        echo "<script>alert('You are not a supplier!'); window.location.href = 'Home.php';</script>";
    }
	

?>

<?php
include("config.php");
session_start();



//if (isset($_SESSION['username']))

	//$Supplier_ID=$_POST['id'];
$Supplier_Name=$_POST['suppname'];
$E_mail=$_POST['email'];
$Company=$_POST['company'];
$Phone=$_POST['phone'];

$_SESSION["username"] = $Supplier_Name;

$sql = "INSERT INTO edit_supplier (Supplier_Name,Email,Company,Phone) VALUES('$Supplier_Name','$E_mail','$Company',$Phone)";
    if($con->query($sql))
	{

		echo "<script>alert('Inserted successfully! View supplier details here'); window.location.href = 'viewSupplier.php';</script>";

	}
	else{
		echo "Error:".$con->error;
	    }
	$con->close();



	






?>