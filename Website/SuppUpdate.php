<?php 
include("config.php");

session_start();

if (isset($_SESSION["username"])) {
    $x = $_SESSION["username"];
    $sql = "SELECT * FROM edit_supplier WHERE Supplier_Name='$x'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $Supplier_ID=$row['Supplier_ID'];
    $Supplier_Name=$row['Supplier_Name'];
    $E_mail=$row['Email'];
    $Company=$row['Company'];
    $Phone=$row['Phone'];

        }
    }
}
if(isset($_POST['submit'])) {
    $Supplier_ID = $_POST['id'];
    $Supplier_Name = $_POST['suppname'];
    $E_mail=$_POST['email'];
$Company=$_POST['company'];
$Phone=$_POST['phone'];
    

    $sql = "UPDATE edit_supplier SET Supplier_Name='$Supplier_Name',Email='$E_mail',Company='$Company',Phone='$Phone' WHERE Supplier_ID='$Supplier_ID'";
    if ($con->query($sql) === true) {
        header("location:Updatebase.php");
        echo "Data updated successfully";
    } else {
        echo "Error: " . $con->error;
    }
}
?>

<html>
<head>
    <title>Update User</title>
    <link rel="icon" href="logo.png">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form  method="POST">
        <div class="loginbox">
            <h1>Update User Information</h1>
            <table>

            <tr>
            <td><p> ID </p></td>  <td><input type="text" name="id" value="<?php echo $Supplier_ID ?>" readonly size="30"></td>
            </tr>  
               
            <tr>
               <td><p>First Name</p></td> <td><input type="text" name="suppname" value="<?php echo $Supplier_Name?>" size="30" > <ion-icon name="create-outline"></ion-icon> </td>
             </tr> 
                 
            <tr>
               <td><p>E mail</p></td> <td><input type="text" name="email" value="<?php echo $E_mail?>" size="30" > <ion-icon name="create-outline"></ion-icon> </td>
             </tr> 
                 
            <tr>
               <td><p>Company</p></td> <td><input type="text" name="company" value="<?php echo $Company?>" size="30" > <ion-icon name="create-outline"></ion-icon> </td>
             </tr> 
                 
            <tr>
               <td><p>Phone</p></td> <td><input type="text" name="phone" value="<?php echo $Phone?>" size="30" > <ion-icon name="create-outline"></ion-icon> </td>
             </tr> 
            
            
           
         

            <tr><td><input type="submit" name="submit" value="Update"></td></tr>
        </div>
    </form>

</body>
</html>