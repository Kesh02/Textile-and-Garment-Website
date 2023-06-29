<?php 
include("config.php");

session_start();

if (isset($_SESSION['id'])) {
    $userid = $_SESSION['id'];
    $sql = "SELECT * FROM customers WHERE Customer_ID=$userid";
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['Customer_ID'];
            $username = $row['Username'];
            $password = $row['Password'];
            $email = $row['Email'];
            $mobileno = $row['Mobileno'];
        }
    }
}

if(isset($_POST['submit'])) {
    $id = $_POST['cid'];
    $username = $_POST["cname"];
    $password = $_POST["cpassword"];
    $email = $_POST["cemail"];
    $mobileno = $_POST["cmobileno"];

    $sql = "UPDATE customers SET Customer_ID='$id', Username='$username', Password='$password', Email='$email', Mobileno='$mobileno' WHERE Customer_ID='$id'";
    if ($con->query($sql) === true) {
        echo "Data updated successfully";
        header("location:readCustomer.php");
        
    } else {
        echo "Error: " . $con->error;
    }
}
?>

<html>
<head>
    <title>Update User</title>
    <link rel="icon" href="logo.png">
    
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form  method="POST">
        <div class="loginbox">
            <h1>Update User Information</h1>
            <table>

            <tr>
            <td><p> Customer ID </p></td>  <td><input type="text" name="cid" value="<?php echo $id ?>" readonly size="30"></td>
            </tr>  
               
            <tr>
               <td><p>Username</p></td> <td><input type="text" name="cname" value="<?php echo $username ?>" size="20" > <name="create-outline"> </td>
             </tr> 
            
            
            <tr>
           <td> <p> Password </p></td>  <td><input type="password" name="cpassword" value="<?php echo $password ?>" size="30" readonly> <name="create-outline" ></td>
           <td><a href="Createpw.html">Change the password</a></td></tr>


            <tr>
           <td> <p>  Email </p></td>  <td><input type="text" name="cemail" value="<?php echo $email ?>" size="30" > <name="create-outline"></td>
            </tr>

            <tr>
            <td><p>Phone no</p></td> <td> <input type="text" name="cmobileno" value="<?php echo $mobileno ?>" > 
            
            </tr>

         

            <tr><td><input type="submit" name="submit" value="Update"></td></tr>
        </div>
    </form>

</body>
</html>