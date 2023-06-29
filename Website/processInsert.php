<?php

include 'config.php';

?>

<?php

$Date = $_POST['feild1'];
$Purchase_ID	 = $_POST['feild2'];
$Product_ID = $_POST['feild3'];
$Dealer_Name	 = $_POST['feild4'];
$Price = $_POST['feild5'];
$Quantity = $_POST['feild6'];
$Total_Price = $_POST['feild7'];



$sql = "INSERT INTO purchase_details(Date , Purchase_ID , Product_ID , Dealer_Name , Price , Quantity , Total_Price) values(?,?,?,?,?,?,?)";
$statment = $con ->prepare($sql);

$statment ->bind_param("dsssiii" ,$Date , $Purchase_ID , $Product_ID , $Dealer_Name , $Price , $Quantity , $Total_Price);




if($statment ->execute())
{
  echo "<script> alert ('Product Added successfully')</script>";
  echo "<script>window.location.href = 'Process.html'</script>";
}

else
{
  echo "<script>alert  ('error in insertion')</script>";
}


  
?>