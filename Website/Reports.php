<?php
 session_start();
 if(!isset($_SESSION['id']))
{
    echo "<script>alert('You have to login'); window.location.href = 'login.php';</script>";

}



require_once('config.php');

$query = "select * from purchase_details";
$result = mysqli_query($con,$query);



?>





<!DOCTYPE html>
<html>
    <head>
        <title>Sales Reports</title>
        <link rel="stylesheet" href="procestyles.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0">
	

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
            
               
                
         <h5 style="text-align:center; font-size:30px; color:darkblue"><b>Sales Reports</b></h5>   <hr>        
                        
                            
                            <div class="card-body">
                                <table class="table-border" border = "1" width = "75%">
                                    <thead>
                                      <tr>
                                        <td>Date</td>
                                        <td>Purchase_ID</td>
                                        <td>Product_ID</td>
                                        <td>Dealer_Name</td>
                                        <td>Price</td>
                                        <td>Quantity</td>
                                        <td>Total_Price</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                      </tr>
                                    </thead>
                                    
                                    
                                    <tr>
                                        <?php
                                           
                                           while($row = mysqli_fetch_assoc($result))
                                           {
                                            
                                            ?>
                                            
                                            <td><?php echo $row['Date']; ?></td>
                                            <td><?php echo $row['Purchase_ID']; ?></td>
                                            <td><?php echo $row['Product_ID']; ?></td>
                                            <td><?php echo $row['Dealer_Name']; ?></td>
                                            <td><?php echo $row['Price']; ?></td>
                                            <td><?php echo $row['Quantity']; ?></td>
                                            <td><?php echo $row['Total_Price']; ?></td>
                                            <td><a href="reportsedit.php?date=<?php echo $row['Date']; ?>&pid=<?php echo $row['Purchase_ID']; ?>&prid=<?php echo $row['Product_ID']; ?>&dname=<?php echo $row['Dealer_Name']; ?>&price=<?php echo $row['Price']; ?>&qun=<?php echo $row['Quantity']; ?>&tprice=<?php echo $row['Total_Price']; ?>" class="btn btn-primary"><button>Edit</button></a></td>
                                            <td><a href="processDelete.php?id=<?php echo $row['Purchase_ID']; ?>" class="btn btn-danger"><button>Delete</button></a></td>

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