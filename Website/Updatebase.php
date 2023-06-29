<?php

include("config.php");

session_start();

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
      $sql = "SELECT * FROM edit_supplier WHERE Supplier_Name='$username'";
    $result = mysqli_query($con, $sql);
    $table = '<table border="1">';
    $table .= '<tr><th>Id</th><th>name</th><th>mail</th><th>company</th><th>phone</th></tr>';

  

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $table .= '<tr>';
            $table .= '<td>' . $row['Supplier_ID'] . '</td>';
            $table .= '<td>' . $row['Supplier_Name'] . '</td>';
            $table .= '<td>' . $row['Email'] . '</td>';
            $table .= '<td>' . $row['Company'] . '</td>';
            $table .= '<td>' . $row['Phone'] . '</td>';
            $table .= '</tr>';
        }

        $table .= '</table>';
    }
}

 else
{
   echo "<script>alert('You do not have an account'); window.location.href = 'home.php';</script>";

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <link rel="icon" href="logo.png">
    
     <link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
    <div class="userdata">
        <h1>User Information</h1>

        <?php echo $table; ?>
        
        <button><a href="SuppUpdate.php">Edit Details</a></button>
        <button type="submit" name="delete"> <a href="deleteSupp.php">Delete Account</a></button>
    </div>
</body>
</html>