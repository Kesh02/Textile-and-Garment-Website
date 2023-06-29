<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Retrieve the Purchase ID from the URL parameter
    $purchaseID = $_GET['id'];

    // Perform the delete query
    $query = "DELETE FROM purchase_details WHERE Purchase_ID = '$purchaseID'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>alert('Record deleted successfully.')</script>";
        echo "<script>window.location.href = 'Reports.php'</script>";
        
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
}
?>
