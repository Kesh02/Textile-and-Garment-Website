<!DOCTYPE html>
<html>
<head>
  <title>FAQ Page</title>
  <style>
  body{
  background-color:#C33C8B;
  }

  
  p.inset {border-style: inset;}
  
    .question {
      font-weight: bold;
      cursor: pointer;
    }
    .answer {
      display: none;
      margin-bottom: 10px;
	  }
	  
 </style>
</head>
<body>

<ol>
  <h1><center>-Frequently Asked Questions-</center></h1>
  <p><h3>Have any questions? You can find out the Frequently Asked Questions of our website visitors and our responses.</h3></p>

<p class="inset">  
  <li><p class="inset"> <div class="question" onclick="toggleAnswer(1)"><h2>Q: How to purchase a product from our website?</h2></div></p></li>
  <div class="answer" id="answer1"><h3>A: Browse through our products and add to cart then enter your personal details, delivery address, contact number etc. Select the Payment method and double check accuracy of the submitted information.Finally place the order.</h3></div>

  <li><p class="inset"> <div class="question" onclick="toggleAnswer(2)"><h2>Q: What payment methods do Fabrics accept?</h2></div></p></li>
  <div class="answer" id="answer2"><h3>A: Cash On Delivery(COD)is available Island-wide or you can visit our website and use your Debit or Credit Card.</h3></div>

  <li><p class="inset"> <div class="question" onclick="toggleAnswer(3)"><h2>Q: How long does a delivery take?</h2></div></p></li>
  <div class="answer" id="answer3"><h3>A: Usually Delivery will happen within 2-5 working days.But orders within Colombo 01-15 will only takes 1-2 working days.</h3></div>
  
  <li><p class="inset"> <div class="question" onclick="toggleAnswer(4)"><h2>Q: What is the return notice period?</h2></div></p></li>
  <div class="answer" id="answer4"><h3>A: Exchanges should be done within 21 days of the package being received.</h3></div>
  
  <li><p class="inset"> <div class="question" onclick="toggleAnswer(5)"><h2>Q: How can we return our package to Fabrics if we need it exchanged?</h2></div></p></li>
  <div class="answer" id="answer5"><h3>A: Please contact us on 0714567863.</h3></div>
 
 </ol>

  <script>
    function toggleAnswer(answerId) {
      const answer = document.getElementById(`answer${answerId}`);
      answer.style.display = answer.style.display === 'none' ? 'block' : 'none';
    }
  </script>
</body>
</html>
