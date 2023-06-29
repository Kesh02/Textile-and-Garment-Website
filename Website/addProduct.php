
<!DOCTYPE html>
<html>
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="addProductStyles.css">
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
            

        <div class="select">

            <a href="addProduct.php"><button type="button" class="active">Add Product</button></a>
          
            <a href="viewProduct.php"><button type="button">view Product</button></a>

          </div>
           
                  
                <div class="form-box">
                  <h1>Add Product</h1>
                    <form method="post" action="insertProduct.php">
                        <div class="form-imputs">
     
                            <div class="feilds">
                                
                                 <input type="text" placeholder="Product name" name="feild1" required>
     
                            </div>
     
                            <div class="feilds">
                             
                                <input type="text" id="numberInput"  placeholder="Product ID" name="feild2" readonly required>
                                <label for="numberInput" onclick="generateNumber()">Generate ID</label>
                              
                              
                              <script>
                                function generateNumber() {
                                  var randomNumber = Math.floor(Math.random() * 2000); // Generates a random number between 0 and 1999
                                  document.getElementById("numberInput").value =  "ID " +randomNumber ;
                                  
                                }
                              </script>
                             
                             </div>
     
                             <div class="feilds">
                                
                                 <input type="text" placeholder="Category" name="feild3">
                                 
                            </div>
     
                            <div class="feilds">
                               
                                <input type="text" placeholder="Stock" name="feild4">
                             
                              </div>
     
                             <div class="feilds">
                                
                                 <input type="text" placeholder="Price" name="feild5">
                         
                              </div>
                               
                              
     
                            
                            <hr> 
                            <div class="btn">
                                <button type="submit" value="insert data" id="addbtn"> Add </button>
                                </div>
                             
                            
                        </div> 
                    </form>
                    

                </div> 

                   
            </body>

            <footer>
                <div class="footer-cont">
                    <div class="flex">
                        <div class="inline">
                        <b> <h3>CATEGORIES</h3></b>
                        <a href=""><p>Men's wear</p></a>
                        <a href=""><p>Women's wear</p></a>
                        <a href=""><p>Kids wear</p></a>
                        <a href=""><p>Accessories</p></a>
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
                    <p>FAQ's</p>
                    <a href=""><p> Contact us </p></a>
                    <a href="PnP-1.html"><p>Privacy Policy</p></a>
                    <a href="TandC-1.html"><p>Terms & Conditions</p></a>
                    </div>
                    
                    
                    </div>
                    </div>
            </footer>
            
            </head>
            
            </html>