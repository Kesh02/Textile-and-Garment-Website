<div class="order-form">
  <h2>Place an Order</h2>
  <form id="order-form" action="order.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="address">Address:</label>
    <textarea id="address" name="address" required></textarea>
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>
    <input type="submit" value="Submit Order">
  </form>
</div>
