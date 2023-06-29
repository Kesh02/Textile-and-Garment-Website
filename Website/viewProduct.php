<?php


require_once('config.php');

$query = "select * from products_";
$result = mysqli_query($con,$query);



?>






<!DOCTYPE html>
<html>
    <head>
        <title>View Product</title>
        <link rel="stylesheet" href="viewProductStyles.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0">
	

    <body>
    <h1>
			<div class = "new">
                <a href="logout.php">Log out </a>
                <!-- <a href = "register.php">Register</a>  
                <a href = "login.php" div class="loginbox">Log in</a>
                <a href="readCustomer.php">User details</a> -->
            </div>
        </h1>
        <h2>
            <b>FABRICS TEXTILE AND GARMENTS</b>
			<img src = "fabricsLogo.jpg" alt="Logo"  style="height:25%; width:10%; float:left; position: relative;top: -20%px; bottom:100%;"></a>
            <a  href = "login.php"><img src = "log.png" alt="Logo" align="middle"  height = "25%" width ="10%" style = float:right></a>
			
        </h2>
        
        <hr>               
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
        <hr>  
        <div class="select">

            <a href="addProduct.html"><button type="button" >Add Product</button></a>
            <a href="viewProduct.php"><button type="button" class="active">view Product</button></a>

        </div>
                                   
                            
                            <div class="card-body">
                                <table class="table-border" border = "1" width = "75%">
                                    <thead>
                                      <tr>
                                        <td>product_name</td>
                                        <td>product_id</td>
                                        <td>Category</td>
                                        <td>Stock</td>
                                        <td>price</td>
                                        <td>Edit</td>
                                        <td>Delete</td>
                                      </tr>
                                    </thead>
                                    
                                    
                                    <tr>
                                        <?php
                                           
                                           while($row = mysqli_fetch_assoc($result))
                                           {
                                            
                                            ?>
                                            
                                            <td><?php echo $row['product_name']; ?></td>
                                            <td><?php echo $row['product_id']; ?></td>
                                            <td><?php echo $row['Category']; ?></td>
                                            <td><?php echo $row['Stock']; ?></td>
                                            <td><?php echo $row['price']; ?></td>
                                            
                                            
                                            <td><a href="EditProduct.php?pname=<?php echo $row['product_name']; ?>&pid=<?php echo $row['product_id']; ?>&cat=<?php echo $row['Category']; ?>&Stock=<?php echo $row['Stock']; ?>&price=<?php echo $row['price']; ?>" class="btn btn-primary"><button>Edit</button></a></td>
                                            <td><a href="productDelete.php?id=<?php echo $row['product_id']; ?>" class="btn btn-danger"><button>Delete</button></a></td>

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