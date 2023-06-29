<?php

include 'config.php';

?>

<?php

$product_name = $_POST['feild1'];
$product_id = $_POST['feild2'];
$category = $_POST['feild3'];
$stock = $_POST['feild4'];
$price = $_POST['feild5'];



$sql = "INSERT INTO products_(product_name , product_id , category , stock , price) values(?,?,?,?,?)";
$statment = $con ->prepare($sql);

$statment ->bind_param("sssii" ,$product_name , $product_id , $category , $stock , $price);




if($statment ->execute())
{
  
  echo "<script> alert ('Product Added successfully')</script>";
  echo "<script>window.location.href = 'addProduct.html'</script>";
  
}

else
{
  echo "<script>alert  ('error in insertion')</script>";
}


  
?>