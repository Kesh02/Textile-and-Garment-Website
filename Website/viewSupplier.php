<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <!-- <script src="search.js"></script> -->
    </head>

    <body>
        <h1>
            <div class="new">
                <a href="logout.php">Log out</a>
                <!-- <a href="register.php">Register</a>  
                <a href="login.php" div class="loginbox">Log in</a>
                <a href="readCustomer.php">User details</a> -->
            </div>
        </h1>
        
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

        <?php
        require_once('config.php');

        session_start();
        if(isset($_SESSION["username"]))
        {
            $username = $_SESSION["username"];
            $query = "SELECT * FROM edit_supplier WHERE Supplier_Name='$username'";
            $result = $con->query($query);

            if($result->num_rows > 0)
            {
                echo "<table>";
                echo "<tr><th>Supplier ID</th><th>Supplier Name</th><th>Email</th><th>Company</th><th>Phone</th></tr>";
                
                while($row = $result->fetch_assoc())
                {
                    echo "<tr>";
                    echo "<td>" . $row['Supplier_ID'] . "</td>";
                    echo "<td>" . $row['Supplier_Name'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Company'] . "</td>";
                    echo "<td>" . $row['Phone'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            }
            else 
            {
                echo "No data found";
            }
        }

        session_write_close();
        ?>

    </body>
</html>