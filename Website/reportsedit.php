<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated values from the form
    $date = $_POST['date'];
    $purchaseID = $_POST['pid'];
    $productID = $_POST['prid'];
    $dealerName = $_POST['dname'];
    $price = $_POST['price'];
    $quantity = $_POST['qun'];
    $totalPrice = $_POST['tprice'];

    // Perform the update query
    $query = "UPDATE purchase_details SET Date = '$date', Product_ID = '$productID', Dealer_Name = '$dealerName', Price = '$price', Quantity = '$quantity', Total_Price = '$totalPrice' WHERE Purchase_ID = '$purchaseID'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    // Retrieve the values from the URL parameters
    $date = $_GET['date'];
    $purchaseID = $_GET['pid'];
    $productID = $_GET['prid'];
    $dealerName = $_GET['dname'];
    $price = $_GET['price'];
    $quantity = $_GET['qun'];
    $totalPrice = $_GET['tprice'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Reports</title>
        <link rel="stylesheet" href="RepotrsEditCss.css">
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
			<img src = "fabricsLogo.jpg" alt="Logo"  style="height:90%; width:10%; float:left; position: relative;top: -20%px; bottom:100%;"></a>
            <a  href = "login.php"><img src = "log.png" alt="Logo" align="middle"  height = "15%" width ="10%" style = float:right></a>
			
        </h2>
        
        <hr>               
            <div class = "navbar">
                <a class ="active" href ="home.php">Home</a>
                <a href = "categories.html">Categories</a>
                <a href = "orderNow.html">Order now</a>
                <a  href = "EdidSupNew.html">Suppliers</a>
				<a  href = "addProduct.html">Products</a>
			    <a  href = "Process.html">Process</a>
		    	<a  href = "Reports.php">Reports</a>
                <a  href = "FAQ.php">FAQ</a>
                <a  href = "ContactUs.php">Contact us</a>
				<input type="text" placeholder="Search" style =" float:right"  >
            </div>	
        <hr>  
            

           
                  
                <div class="form-box"><hr>
                <h1>Edit Purchase Details</h1><hr>
                <form method="POST" action="">
                        <div class="form-imputs">
     
                            <div class="feilds">
                                 
                               <label for="date">Purchase_ID:</label>
                               <input type="text" name="pid" value="<?php echo $purchaseID; ?>" readonly><br>
                              

     
                            </div>
     
                            <div class="feilds">
                             
                                 <label for="date">Date:</label>
                                 <input type="text" name="date" value="<?php echo $date; ?>"><br>
                              
                              
                              
                             
                             </div>
     
                             <div class="feilds">
                                                                   
                                <label for="prid">Product ID:</label>
                                <input type="text" name="prid" value="<?php echo $productID; ?>"><br>
                                  
                                  
                                  
                                  
                                 
                            </div>
     
                            <div class="feilds">
                               
                               <label for="dname">Dealer Name:</label>
                               <input type="text" name="dname" value="<?php echo $dealerName; ?>"><br>
                             
                              </div>
     
                             <div class="feilds">
                                
                                    <label for="price">Price:</label>
                                    <input type="text" name="price" value="<?php echo $price; ?>" id="price"><br>
                         
                              </div>

                              <div class="feilds">
                                
                                  <label for="qun">Quantity:</label>
                                  <input type="text" name="qun" value="<?php echo $quantity; ?>" id="num" ><br>
                                  <label for="total" onclick="generateTotal()">Price</label>

                                   <script>
                                      function generateTotal(){

                                        var qunt = document.getElementById("num").value;
                                        var price = document.getElementById("price").value;
                                        let total = qunt * price ;
                                        document.getElementById("totalprice").value = total;

                                      }


                                   </script>
                        
                             </div>

                             <div class="feilds">
                                
                                     <label for="tprice">Total Price:</label>
                                     <input type="text" name="tprice" value="<?php echo $totalPrice; ?>" id="totalprice"><br>
                        
                             </div>
                               
                              
     
                              
     
                            <hr> <br>
                            <div class="btn">
                                
                                 <button type="submit" value="Update">Update</button>

                                </div>

                             
                            
                        </div> 
                    </form>

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

