<?php

include("config.php");

session_start();

if (isset($_SESSION['id'])) {
    $userid = $_SESSION['id'];
    $sql = "SELECT * FROM customers WHERE Customer_ID=$userid";
    $result = mysqli_query($con, $sql);
    $table = '<table border="1" class="table-size">';
    $table .= '<tr><th>ID</th><th>Username</th><th>Password</th><th>E-Mail</th><th>Mobile no</th></tr>';

  

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $table .= '<tr>';
            $table .= '<td>' . $row['Customer_ID'] . '</td>';
            $table .= '<td>' . $row['Username'] . '</td>';
            $table .= '<td>' . str_repeat('*',strlen($row['Password'])). '</td>';
            $table .= '<td>' . $row['Email'] . '</td>';
            $table .= '<td>' . $row['Mobileno'] . '</td>';
            $table .= '</tr>';
        }

        $table .= '</table>';
    }
}

 else
{
   echo "<script>alert('You do not have an account'); window.location.href = 'Home.php';</script>";

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <link rel="icon" href="logo.png">
    
     <link rel="stylesheet" type="text/css" href="userDetails.css">
</head>
<body>
    <div class="userdata">
        <h1>User Information</h1>

        <?php echo $table; ?>
        
        <button class="btn"><a href="editCustomer.php">Edit Details</a></button>
        <button class="btn"> <a href="deleteCustomer.php">Delete Account</a></button>
        <button class="btn"> <a href="Home.php">Go back to home page</a></button>
    </div>
</body>
</html>
