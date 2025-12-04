<?php
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/catalog.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <title>Manga Catalog</title>
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

      <i class="fa-solid fa-bars menu-btn"></i>
      <div class="navigation-links">
        <a href="index.php#hero-section">Home</a>
        <a href="catalog.html">Store</a>
        <a href="index.php#founders-section">Founders</a>
        <a href="index.php#about-section">About</a>
        <a href="index.php#contact-section">Contact Us</a>
      </div>

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
  <div class="search-bar-container">
    <div class="search-container">
      <input type="text" id="searchInput" placeholder="Search manga..." />
    </div>
  </div>
  <div class="catalog-container">
    <!-- Sidebar -->
    <div class="sidebar">
      <h3>Categories</h3>
      <ul>
        <li data-genre="all" class="active">All</li>
        <li data-genre="Adventure">Adventure</li>
        <li data-genre="Action">Action</li>
        <li data-genre="Fantasy">Fantasy</li>
        <li data-genre="Dark Fantasy">Dark Fantasy</li>
        <li data-genre="Comedy">Comedy</li>
        <li data-genre="Thriller">Thriller</li>
        <li data-genre="Mystery">Mystery</li>
      </ul>
    </div>
    <!-- Catalog -->
    <div class="catalog" id="catalog">
      <div class="card">
        <img src="src/images/one_piece.jpg" />
        <h3>One Piece</h3>
        <p>Adventure / Fantasy</p>
        <button class="add-to-cart" data-product-id="1">Add to Cart</button>
      </div>
      <div class="card">
        <img src="src/images/naruto.jpg" />
        <h3>Naruto</h3>
        <p>Adventure / Ninja / Shonen</p>
        <button class="add-to-cart" data-product-id="2">Add to Cart</button>
      </div>
      <div class="card">
        <img src="src/images/bleach.jpg" />
        <h3>Bleach</h3>
        <p>Supernatural / Action / Shonen</p>
        <button class="add-to-cart" data-product-id="3">Add to Cart</button>
      </div>
      <div class="card">
        <img src="src/images/monster.jpg" />
        <h3>Monster</h3>
        <p>Thriller / Mystery</p>
        <button class="add-to-cart" data-product-id="4">Add to Cart</button>
      </div>
      <div class="card">
        <img src="src/images/aot_manga_cover.jpg" />
        <h3>Attack on Titan</h3>
        <p>Action / Dark Fantasy / Drama</p>
        <button class="add-to-cart" data-product-id="5">Add to Cart</button>
      </div>
      <div class="card">
        <img src="src/images/demon_slayer.jpeg" />
        <h3>Demon Slayer</h3>
        <p>Dark Fantasy / Action</p>
        <button class="add-to-cart" data-product-id="6">Add to Cart</button>
      </div>
      <div class="card">
        <img src="src/images/digimon.webp" />
        <h3>Digimon</h3>
        <p>Adventure / Fantasy / Action</p>
        <button class="add-to-cart" data-product-id="7">Add to Cart</button>
      </div>
      <div class="card">
        <img src="src/images/gintama.webp" />
        <h3>Gintama</h3>
        <p>Comedy / Action / Sci-Fi</p>
        <button class="add-to-cart" data-product-id="8">Add to Cart</button>
      </div>
    </div>
    <!-- your manga cards here -->
  </div>
  <div id="toast"></div>
  <script src="scripts/catalog.js"></script>
</body>

</html>