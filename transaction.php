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

// Fetch user transactions using correct tables
$sql = "
SELECT 
    orders.order_id,
    orders.order_date,
    order_items.quantity,
    order_items.price AS item_price,
    products.title
FROM orders
JOIN order_items ON orders.order_id = order_items.order_id
JOIN products ON order_items.product_id = products.id
WHERE orders.user_id = $user_id
ORDER BY orders.order_date DESC
";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transaction History</title>
    <link rel="icon" href="src/icons/favicon.ico"/>
    <link rel="stylesheet" href="css/transaction.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
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
    <div class="container">
        <h1>Transaction History</h1>

        <input type="text" id="search" placeholder="Search by title or ID..." onkeyup="searchTransactions()" />

        <table class="history-table">
            <thead>
                <tr>
                    <th>Transaction ID</th>
                    <th>Manga Title</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody id="transactionBody">
                <?php if ($result->num_rows === 0): ?>
                    <tr><td colspan="5">No transactions found.</td></tr>
                <?php else: ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>#TX-<?= str_pad($row['order_id'], 5, '0', STR_PAD_LEFT) ?></td>
                            <td><?= htmlspecialchars($row['title']) ?></td>
                            <td><?= date("Y-m-d", strtotime($row['order_date'])) ?></td>

                            <!-- Total = item_price * quantity -->
                            <td>₱<?= number_format($row['item_price'] * $row['quantity'], 2) ?></td>

                            <td><span class="badge success">Completed</span></td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="scripts/transaction.js"></script>
</body>
</html>
