<?php


require_once('config.php');

$query = "select * from online_market_";
$result = mysqli_query($connection,$query);



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

            <div class="select">

                <a href="#"><button type="button"  >Sales Reports</button></a>
                <a href="#"><button type="button" class="active">Online Orders</button></a>
                

              </div>
            

            <br><br><br><br>

            <div class="srhbar" >

                <input type="text" placeholder="">

            </div>

            
               
                
                    
                        
                            
                            <div class="card-body">
                                <table class="table-border" border = "1" width = "75%">
                                    <thead>
                                      <tr>
                                        <td>Order_ID</td>
                                        <td>_Name</td>
                                        <td>Size</td>
                                        <td>Quantity</td>
                                        <td>Price</td>
                                        <td>Custome_name</td>
                                        <td>Number</td>
                                        <td>Total_price</td>
                                        <td>Payment_method</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                      </tr>
                                    </thead>
                                    
                                    
                                    <tr>
                                        <?php
                                           
                                           while($row = mysqli_fetch_assoc($result))
                                           {
                                            
                                            ?>
                                            <td><?php echo $row['Order_ID']; ?></td>
                                            <td><?php echo $row['_Name']; ?></td>
                                            <td><?php echo $row['Size']; ?></td>
                                            <td><?php echo $row['Quantity']; ?></td>
                                            <td><?php echo $row['Price']; ?></td>
                                            <td><?php echo $row['Custome_name']; ?></td>
                                            <td><?php echo $row['Number']; ?></td>
                                            <td><?php echo $row['Total_price']; ?></td>
                                            <td><?php echo $row['Payment_method']; ?></td>
                                            <td><a href="editOrder.php?order=<?php echo $row['Order_ID']; ?>&_Name=<?php echo $row['_Name']; ?>&Size=<?php echo $row['Size']; ?>&Quantity=<?php echo $row['Quantity']; ?>&Price=<?php echo $row['Price']; ?>&Custome_name=<?php echo $row['Custome_name']; ?>&Number=<?php echo $row['Number']; ?>&Total_price=<?php echo $row['Total_price']; ?>&Payment_method=<?php echo $row['Payment_method'];?>" class="btn btn-primary"><button>Edit</button></a></td>
                                            <td><a href="DeleteOrders.php?Order_ID=<?php echo $row['Order_ID']; ?>" class="btn btn-danger"><button>Delete</button></a></td>

                                            </tr>
                                             <?php
                                           }


                                        ?>
                                    
                                </table>
                            </div>
                        
        
        </body>

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
      

</html>