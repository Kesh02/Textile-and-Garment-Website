<?php
include("config.php");

session_start();

if (isset($_SESSION["id"])) {
    $userid = $_SESSION["id"];

    if (isset($_POST['submit'])) {
        $pwd1 = $_POST['password1'];
        $pwd2 = $_POST['password2'];

        if ($pwd1 == $pwd2) {
            $sql = "UPDATE customers SET Password='$pwd1' WHERE Customer_ID='$userid'";
            if ($con->query($sql) === true) {
                header("location:readCustomer.php");
                echo "Password updated";
            } else {
                echo "Error: " . $conn->error;
            }
        }
    } else {
        echo "<script>alert('No matching Password'); window.location.href = 'Forgot.html';</script>";
    }
} else {
    if (isset($_POST['submit'])) {
        $username = $_POST['id'];
        $pwd1 = $_POST['password1'];
        $pwd2 = $_POST['password2'];

        $query = "SELECT customers name  FROM customers WHERE Customer_ID='$userid'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            if ($pwd1 == $pwd2) {
                $sql = "UPDATE customers SET Password='$pwd1' WHERE Customer_ID='$userid'";
                if ($conn->query($sql) === true) {
                   
                    echo "Password updated";
                } else {
                    echo "Error: " . $con->error;
                }
            } else {
                echo "<script>alert('No matching Password'); window.location.href = 'createpw.html';</script>";
            }
        } else {
            echo "User not found";
        }
    }
}
?>