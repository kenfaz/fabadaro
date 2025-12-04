<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db   = "manga_store";

if (!isset($_SESSION['user_id'])) {
    echo "You must log in first.";
    exit;
}

$user_id = $_SESSION['user_id'];

$conn = new mysqli($host, $user, $pass, $db);

// Fetch items in cart
$sql = "
SELECT cart.cart_id, cart.quantity, products.title, products.price, products.image
FROM cart
JOIN products ON cart.product_id = products.id
WHERE cart.user_id = $user_id
";

$result = $conn->query($sql);

$items = [];
$subtotal = 0;

while ($row = $result->fetch_assoc()) {
    $items[] = $row;
    $subtotal += ($row['price'] * $row['quantity']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manga Cart</title>
    <link rel="stylesheet" href="css/cart.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>
<body>

 <!-- Navbar -->
  <div class="nav-container">
    <nav class="nav-bar">

      <div class="mobile-nav" id="mobileNav">
        <a href="index.php#hero-section">Home</a>
        <a href="catalog.html">Store</a>
        <a href="index.php#founders-section">Founders</a>
        <a href="index.php#about-section">About</a>
        <a href="index.php#contact-section">Contact Us</a>
      </div>

      <div class="navigation-links">
        <a href="index.php#hero-section">Home</a>
        <a href="catalog.php">Store</a>
        <a href="index.php#founders-section">Founders</a>
        <a href="index.php#about-section">About</a>
        <a href="index.php#contact-section">Contact Us</a>
      </div>

      <i class="fa-solid fa-bars menu-btn"></i>
      <div class="user-links">
        <div class="user-div">
          <a href="transaction.php"> <i class="fa-solid fa-user"></i></a>
          <a href="transaction.php">
            <p>Kenken</p>
          </a>
        </div>
        <a href="cart.php"><i class="fa-solid fa-basket-shopping"></i></a>
        <a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
      </div>
    </nav>
  </div>
  <!-- END OF NAVIGATION BAR -->

<div class="main-div">
  <div class="cart-container">
    <h1>Your Cart</h1>

    <?php if (count($items) === 0): ?>
        <p>Your cart is empty.</p>
    <?php else: ?>

        <?php foreach ($items as $item): ?>
        <div class="cart-item" data-cart-id="<?= $item['cart_id'] ?>">
            <img src="<?= $item['image'] ?>" alt="Manga Cover" />

            <div class="details">
                <h2><?= $item['title'] ?></h2>
                <p>₱<?= number_format($item['price'], 2) ?></p>

                <div class="quantity">
                    <button class="qty-btn" onclick="updateQty(<?= $item['cart_id'] ?>, -1)">-</button>
                    <span class="qty"><?= $item['quantity'] ?></span>
                    <button class="qty-btn" onclick="updateQty(<?= $item['cart_id'] ?>, 1)">+</button>
                </div>

                <button class="remove-btn" onclick="removeItem(<?= $item['cart_id'] ?>)">Remove</button>
            </div>

            <div class="item-total">
                ₱<?= number_format($item['price'] * $item['quantity'], 2) ?>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="cart-summary">
          <p>Subtotal: <span id="subtotal">₱<?= number_format($subtotal, 2) ?></span></p>
          <button class="checkout-btn">Checkout</button>
        </div>

    <?php endif; ?>
  </div>
</div>
<div id="notification-container"></div>


<script src="scripts/cart.js"></script>
</body>
</html>
