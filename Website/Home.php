<?php
session_start();
include("config.php");

//checking if session exists
if (isset($_SESSION['id'])){

//accessing the session variable
$customerid = $_SESSION['id'];


$sql="SELECT Username FROM customers WHERE Customer_ID='$customerid'";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    //fetch the username from the result
    while($row=$result->fetch_assoc())
        {
            $username=$row["Username"];
            //echo "Welcome," .$username. "!";
            echo '<span style="font-size: 40px; color: black;">Welcome, ' . $username . '!</span>';

        }
}
}

// else
// {
//     echo "No user found!";
// }

$con->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="styles.css">
        <!-- <script src="search.js"></script> -->
	</head>

    <body>
        <h1>
			<div class = "new">
                <a href="logout.php">Log out </a>
                <a href = "register.php">Register</a>  
                <a href = "login.php" div class="loginbox">Log in</a>
                <a href="readCustomer.php">User details</a>
            </div>
        </h1>
        <h2>
            <b>FABRICS TEXTILE AND GARMENTS</b>
			<img src = "fabricsLogo.jpg" alt="Logo"  style="height:25%; width:10%; float:left; position: relative;top: -20%px; bottom:100%;"></a>
            <a  href = "login.php"><img src = "log.png" alt="Logo" align="middle"  height = "25%" width ="10%" style = float:right></a>
			
        </h2>
        
        <hr>               
            <div class = "navbar">
                <a class ="active" href ="home.php">Home</a>
                
                <a href = "order_now.html">Order now</a>
                <a  href = "EdidSupNew.html">Suppliers</a>
				<a  href = "addProductSession.php">Products</a>
			    <a  href = "Process.html">Process</a>
		    	<a  href = "Reports.php">Reports</a>
                <a  href = "FAQ.php">FAQ</a>
                <a  href = "ContactUs.php">Contact us</a>
				<input type="text" id="searchItem" placeholder="Search" style =" float:right"  >
                <ul id="resultItems"></ul>
            </div>	
        <hr>  

            <div class="container">
				<!--first picture*/-->
                <div class="gal">
                    <div class="imgbox"></div>
                </div>      
                  <!--first picture end*/--> 
                
                <div class="gallery">
                    
                   <div class="img"><h3>Men's</h3></div>
                   <div class="img"><h3>Women's</h3></div>
                   <div class="img"><h3>kids</h3></div>
                   <div class="img"><h3>Accessories</h3></div>
                    
                </div>
                
            </div>			 
			 
				
			<div class="footer-cont">
				<div class="flex">
					<div class="inline">
					<b> <h3>CATEGORIES</h3></b>
					<p>Men's wear</p>
					<p>Women's wear</p>
					<p>Kids wear</p>
					<p>Accessories</p>
					</div>
				
				<div class="inline">
				<b><h3>OPENING HOURS</h3></b>
				<p> Open Everyday</p>
				<p>9.00 AM- 6.00 PM</p>
				<p> Contact Us <p> 
				071 - 762800200
				</div>
				
				<div class="inline">
				<b><h3> INFORMATION </h3></b>
				<a href = "FAQ.php"> <p> FAQ's </p></a>
				<a href="ContactUs.php"><p> Contact us </p></a>
				<a href="PnP-1.html"><p>Privacy Policy</p></a>
				<a href="TandC.html"><p>Terms & Conditions</p></a>
				</div>
				
				
				</div>
				</div>




    </body>
    
</html>