<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated values from the form
    $Order_ID = $_POST['order'];
    $product_name = $_POST['_Name'];
    $size = $_POST['Size'];
    $Quantity = $_POST['Quantity'];
    $price = $_POST['Price'];
    $Custome_name = $_POST['Custome_name'];
    $Number = $_POST['Number'];
    $Total_price = $_POST['Total_price'];
    $Payment_method	 = $_POST['Payment_method'];

    // Perform the update query
    $query = "UPDATE online_market_ SET Order_ID = '$Order_ID', _Name = '$product_name', size = '$size', Quantity = '$Quantity', price = '$price', Custome_name = '$Custome_name', `Number` = '$Number', Total_price = '$Total_price', Payment_method = '$Payment_method' WHERE Order_ID = '$Order_ID'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Record updated successfully.";
        echo "<script>window.location.href = 'ViewOrders.php'</script>";
    } else {
        echo "Error updating record: " . mysqli_error($connection);
    }
} else {
    // Retrieve the values from the URL parameters
    $Order_ID = $_GET['order'];
    $product_name = $_GET['_Name'];
    $size = $_GET['Size'];
    $Quantity = $_GET['Quantity'];
    $price = $_GET['Price'];
    $Custome_name = $_GET['Custome_name'];
    $Number = $_GET['Number'];
    $Total_price = $_GET['Total_price'];
    $Payment_method	 = $_GET['Payment_method'];
?>

<!-- Your HTML code continues here -->

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="editOrder.css">
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

            

           
                  
            <div class="form-box"><hr>
                <h1>Place Order</h1><hr>
                <form  action="" method="POST">
                        <div class="form-imputs">

                            <div class="feilds">
                                 
                                <label for="pname" onclick="genarateID()">Order ID:</label>
                                <input type="text" name="order" id="order"  value="<?php echo $Order_ID; ?>"><br>

                                <script>
                                     function genarateID()
                                     {
                                        var randomNumber = Math.floor(Math.random() * 5000); // Generates a random number between 0 and 1999
                                        document.getElementById("order").value =  "ID " +randomNumber ;
                                     }
                                </script>
                               
 
      
                             </div>
     
                            <div class="feilds">
                                 
                               <label for="pname">Product Name:</label>
                               <input type="text" name="_Name" id="pname" value="<?php echo $product_name; ?>"><br>
                              

     
                            </div>
     
                            <div class="feilds">
                             
                                 <label for="size">Size:</label>
                                 <input type="text" name="Size" id="size" value="<?php echo $size; ?>"><br>
                              
                              
                              
                             
                             </div>
     
                             <div class="feilds">
                                                                   
                                <label for="qun">Quantity:</label>
                                <input type="text" name="Quantity" id="qun" value="<?php echo $Quantity; ?>"><br>
                                  
                                  
                                  
                                  
                                 
                            </div>
     


                            

                            <div class="feilds">
                               
                               <label for="price">Price:</label>
                               <input type="text" name="Price" id="price" value="<?php echo $price; ?>"><br>
                             
                              </div>

                              <hr>
                              <h4><b>customer Details</b></h4>
                              <hr>
     
                             <div class="feilds">
                                
                                    <label for="Cname">customer Name:</label>
                                    <input type="text" name="Custome_name"  id="Cname" value="<?php echo $Custome_name; ?>"><br>
                         
                              </div>

                              <div class="feilds">
                                
                                  <label for="num">Number:</label>
                                  <input type="text" name="Number"  id="num" value="<?php echo $Number; ?>"><br>
                                  
                        
                             </div>

                             <hr>
                              <h4><b>Payment Details</b></h4>
                              <hr>

                             <div class="feilds">
                                
                                     <label for="tprice">Total Price:</label>
                                     <input type="text" name="Total_price"  id="totalprice" value="<?php echo $Total_price; ?>"><br>
                        
                             </div>

                             <div class="feilds">
                                
                                <label for="pay">Payment Method:</label>
                                <select name="Payment_method" value="<?php echo $Payment_method; ?>">
                                    <option>Card</option>
                                    <option>Cash</option>
                                  
                                </select><br>
                   
                             </div>
                               
                              
     
                              
     
                            <hr> <br>
                            <div class="btn">
                                
                                <button type="submit" value="Update">Update</button>

                               </div>

                               
                            
                        </div> 
                    </form>
                    <a href="ViewOrders.php"><button>View Orders</button></a>

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
<?php
}
?>
