<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <style>

    body{
	background-color:#C33C8B;;
	}
	  p.inset {border-style: inset;}

    .container {
	  border: 5px solid black;
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
	  background-color:white;

	 
    }
    input[type="text"],
    textarea {
      width:100%;
      padding: 5px;
      margin-bottom: 10px;
    }
    input[type="submit"] {
      padding: 10px 20px;
      background-color: gray;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: green;
    }

	
  </style>
</head>
<body>


  <div class="container">
    <h1><center>-Contact Us-</center></h1>
	
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
	  
	echo "<p>Thank you for your message, $name!</p>";
    }
    ?>
	
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <input type="submit" value="Submit">
    </form>
  </div>
  <div class="about">
    <h1><center>-About Us-</center></h1>
	<p><h4>Welcome to our Fabrics website! We are a passionate team dedicated to providing high-quality textile products to our valued customers.
    At Fabrics, we specialize in manufacturing and supplying a wide range of textiles, including garments. With years of experience in the industry, we have built a strong reputation for delivering exceptional products and outstanding customer service.
    <p><h4>Our commitment to quality is evident in every aspect of our operations. We source the finest raw materials, employ skilled artisans and craftsmen, and adhere to strict quality control measures throughout the production process. This ensures that our customers receive textiles that are not only beautiful but also durable and reliable.</h4></p>
    <p><h4>Whether you are a fashion designer, a retailer, or an individual looking for textiles for your home, we have a diverse collection to meet your specific needs. Our product range includes fabrics in various designs, colors, and textures, ready-made garments for men, women, and children, as well as home textiles like bedding, curtains, and towels.</h4></p>
    <p><h4>We believe in fostering long-term relationships with our customers, and we strive to exceed their expectations at every step. Our knowledgeable and friendly customer support team is always ready to assist you with any inquiries, product recommendations, or order assistance.,</h4></p>
 </div>
 <div class="container-address">
  <p class="inset"><h1>Address</h1></p>
 <img src="addres.jpeg" style="float:left;width:60px;height:60px;">
<p><h3>No.23/A,<br/>
       Queen Mary Road,<br/>
          Gampaha.</h3></p>
 </div>

 <div class="container-contactNo">
  <p class="inset"><h1>Contact number</h1></p>
 <img src="phone.jpeg" style="float:left;width:50px;height:40px;">
<p><h2>075-3576289</h2></p>
 </div>
 
 <div class="container-email">
  <p class="inset"><h1>Email</h1></p>
 <img src="email.jpeg" style="float:left;width:60px;height:40px;">
<p><h2>fabricsSL@mail.com</h2></p>
 </div>
</body>
</html>