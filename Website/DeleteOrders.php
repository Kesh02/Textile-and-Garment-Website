<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve the Purchase ID from the URL parameter
    $Order_ID  = $_GET['Order_ID'];

    // Perform the delete query
    $query = "DELETE FROM online_market_ WHERE Order_ID  = '$Order_ID'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script>alert('Record deleted successfully.')</script>";
        echo "<script>window.location.href = 'ViewOrders.php'</script>";
        
    } else {
        echo "Error deleting record: " . mysqli_error($connection);
    }
}
?>
