<?php
session_start();
include 'header.html';
?>

<?php
if (isset($_SESSION['username'])) {
    echo "<p style='color: #555;'>👋 Hello, <strong>{$_SESSION['username']}</strong>! Ready to order?</p>";
} else {
    echo "<p style='color: red;'>You are not registered. <a href='register.php'>Register here</a></p>";
}
?>

<h2>Today's Menu</h2>
<ul>
  <li>🍕 Pizza - ₹250</li>
  <li>🍔 Burger - ₹150</li>
  <li>🍝 Pasta - ₹200</li>
  <li>🥟 Momos - ₹100</li>
</ul>

<form method="post" action="">
  <h3>Order Your Food</h3>

  <label>Name:
    <input type="text" name="name" required value="<?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : ''; ?>">
  </label>

  <label>Food Item:
    <select name="item" required>
      <option value="">-- Select Item --</option>
      <option value="Pizza">Pizza</option>
      <option value="Burger">Burger</option>
      <option value="Pasta">Pasta</option>
      <option value="Momos">Momos</option>
    </select>
  </label>

  <label>Quantity:
    <input type="number" name="quantity" min="1" required>
  </label>

  <input type="submit" name="order" value="Place Order">
</form>

<?php
if (isset($_POST['order'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $item = $_POST['item'];
    $quantity = (int)$_POST['quantity'];

    echo "<p class='success'>✅ Thank you, <strong>$name</strong>! Your order for <strong>$quantity $item(s)</strong> has been placed.</p>";
}
?>

<?php include 'footer.html'; ?>
