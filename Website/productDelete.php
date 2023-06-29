<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve the Purchase ID from the URL parameter
    $product_id = $_GET['id'];

    // Perform the delete query
    $query = "DELETE FROM products_ WHERE product_id = '$product_id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Record deleted successfully.')</script>";
        echo "<script>window.location.href = 'viewProduct.php'</script>";
        
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
?>