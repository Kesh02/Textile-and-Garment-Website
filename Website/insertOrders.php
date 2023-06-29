<?php

include 'config.php';

?>

<?php

$Order_ID = $_POST['feild0'];
$product_name = $_POST['feild1'];
$size = $_POST['feild2'];
$Quantity = $_POST['feild3'];
$price = $_POST['feild4'];
$Custome_name = $_POST['feild5'];
$Number = $_POST['feild6'];
$Total_price = $_POST['feild7'];
$Payment_method	 = $_POST['feild8'];



$sql = "INSERT INTO online_market_( Order_ID, _Name, Size , Quantity , Price , Custome_name , Number , Total_price , Payment_method	) values(?,?,?,?,?,?,?,?,?)";
$statment = $con ->prepare($sql);

$statment ->bind_param("ssiiisiis" ,$Order_ID,$product_name , $size , $Quantity , $price , $Custome_name , $Number , $Total_price , $Payment_method);




if($statment ->execute())
{
  echo "<script> alert ('Product Added successfully')</script>";
  echo "<script>window.location.href = 'order_now.html'</script>";
  
}

else
{
  echo "<script>alert  ('error in insertion')</script>";
}


  
?>