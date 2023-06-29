<?php
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated values from the form
    $product_name = mysqli_real_escape_string($con, $_POST['pname']);
    $product_id = mysqli_real_escape_string($con, $_POST['pid']);
    $Category = mysqli_real_escape_string($con, $_POST['cat']);
    $Stock = mysqli_real_escape_string($con, $_POST['Stock']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    // Perform the update query
    $query = "UPDATE products_ SET product_name = '$product_name', Category = '$Category', Stock = '$Stock', price = '$price' WHERE product_id = '$product_id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
} else {
    // Retrieve the values from the URL parameters
    $product_name = $_GET['pname'];
    $product_id = $_GET['pid'];
    $Category = $_GET['cat'];
    $Stock = $_GET['Stock'];
    $price = $_GET['price'];
?>
   <!DOCTYPE html>
<html>
    <head>
        <title>Process</title>
        <link rel="stylesheet" href="EditProductStyles.css">
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
                                 
                               <label for="pname">product_name:</label>
                               <input type="text" name="pname" value="<?php echo $product_name; ?>" readonly><br>
                              

     
                            </div>
     
                            <div class="feilds">
                             
                                 <label for="pid">product_id:</label>
                                 <input type="text" name="pid" value="<?php echo $product_id; ?>"><br>
                              
                              
                              
                             
                             </div>
     
                             <div class="feilds">
                                                                   
                                <label for="cat">Category:</label>
                                <input type="text" name="cat" value="<?php echo $Category; ?>"><br>
                                  
                                  
                                  
                                  
                                 
                            </div>
     
                            <div class="feilds">
                               
                               <label for="Stock">Stock:</label>
                               <input type="text" name="Stock" value="<?php echo $Stock; ?>"><br>
                             
                              </div>
     
                             <div class="feilds">
                                
                                    <label for="price">price:</label>
                                    <input type="text" name="price" value="<?php echo $price; ?>" ><br>
                         
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

