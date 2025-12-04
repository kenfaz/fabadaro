<?php
include("database.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta
    charset="utf-8"
    name="viewport"
    content="width=device-width, initial-scale=1.0" />
  <title>Welcome | Fabadaro</title>
  <link rel="stylesheet" href="css/index.css" />
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

  <!-- Hero section -->
  <section id="hero-section">
    <div class="hero-main-div">
      <div class="hero-left-div">
        <h3>Trending</h3>
        <h1>ATTACK ON TITAN</h1>
        <h2>New Chapters Available</h2>
        <p>
          Attack on Titan follows the fate of mankind, who, after being
          decimated by giant monsters, retreat to the safety of their last
          kingdom, protected by three great circular walls over fifty meters
          high. The last survivors of the human race now live in a
          rudimentary, medieval-looking way. On the brink of extinction, they
          are forced to remain entrenched in their fortified space. Beyond the
          walls, packs of bloodthirsty giants roam the vast territories of the
          surrounding regions. Humanity is locked out, condemned to a
          precarious form of captivity, deprived of its freedom.
        </p>
      </div>
      <div class="hero-right-div">
        <img src="src/images/aot_manga_cover.jpg" />
        <div class="hero-manga-button-container">
          <button id="add-to-cart-button" name="add-to-cart">
            Add to Cart
          </button>
          <button id="buy-now-button" name="buy-now">Buy Now</button>
        </div>
      </div>
    </div>
  </section>
  <!-- Store section -->
  <section id="store-section">
    <div class="store-main-div">
      <div class="store-header-div">
        <img src="src/images/gintama_logo.png" />
        <img src="src/images/naruto_logo.png" />
        <img src="src/images/bleach_logo.png" />
        <img src="src/images/jjk_logo.png" />
        <img src="src/images/dragonball_logo.png" />
      </div>

      <!-- <div class="popular-mangas-div">
          <h1>Popular Mangas/Comics</h1>
        </div> -->

      <div class="daily-mangas-div">
        <div class="daily-mangas-header">
          <h1>Popular Mangas/Comics</h1>
        </div>
        <div class="daily-mangas-products">
          <div class="manga-container">
            <img src="src/images/blue_lock.jpeg" />
            <h1>Blue Lock</h1>
            <h3>Vol. 5</h3>
            <p>Muneyuki Kaneshiro</p>
          </div>
          <div class="manga-container">
            <img src="src/images/jujutsu_kaisen.jpeg" />
            <h1>Jujutsu Kaisen</h1>
            <h3>Vol. 1</h3>
            <p>Gege Akutami</p>
          </div>
          <div class="manga-container">
            <img src="src/images/demon_slayer.jpeg" />
            <h1>Kimetsu No Yaiba</h1>
            <h3>Vol. 1</h3>
            <p>Koyuharu Gotouge</p>
          </div>
          <div class="manga-container">
            <img src="src/images/chainsaw_man.jpeg" />
            <h1>Chainsaw Man</h1>
            <h3>Vol. 10</h3>
            <p>Tatsuki Fujimoto</p>
          </div>

          <div class="daily-mangas-div">
            <div class="daily-mangas-header">
              <h1>Daily Mangas/Comics</h1>
            </div>
            <div class="daily-mangas-products">
              <div class="manga-container">
                <img src="src/images/blue_lock.jpeg" />
                <h1>Blue Lock</h1>
                <h3>Vol. 5</h3>
                <p>Muneyuki Kaneshiro</p>
              </div>
              <div class="manga-container">
                <img src="src/images/jujutsu_kaisen.jpeg" />
                <h1>Jujutsu Kaisen</h1>
                <h3>Vol. 1</h3>
                <p>Gege Akutami</p>
              </div>
              <div class="manga-container">
                <img src="src/images/demon_slayer.jpeg" />
                <h1>Kimetsu No Yaiba</h1>
                <h3>Vol. 1</h3>
                <p>Koyuharu Gotouge</p>
              </div>
              <div class="manga-container">
                <img src="src/images/chainsaw_man.jpeg" />
                <h1>Chainsaw Man</h1>
                <h3>Vol. 10</h3>
                <p>Tatsuki Fujimoto</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Founders section -->
  <section id="founders-section">
    <div class="founders-main-div">
      <div class="famadico-div">
        <h1>Famadico</h1>
        <img src="src/images/famadico.jpg" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
          eius magnam adipisci assumenda voluptate explicabo, nam consequuntur
          mollitia soluta! Quidem possimus nemo voluptates et cumque omnis
          porro quam autem nisi.
        </p>
      </div>
      <div class="baybayan-div">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident
          quas magni voluptates ad ex repudiandae ut exercitationem officiis
          pariatur cum dolorem incidunt, facilis rerum delectus, velit
          cupiditate aliquid aliquam id.
        </p>
        <img src="src/images/baybayan.jpg" />
        <h1>Baybayan</h1>
      </div>
      <div class="dancel-div">
        <h1>Dancel</h1>
        <img src="src/images/dancel.jpg" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
          mollitia consequatur laborum corporis quidem aperiam et vero harum?
          Autem ab blanditiis reiciendis dolorem sunt! Deserunt ad laboriosam
          ullam officiis vel?
        </p>
      </div>
      <div class="rone-div">
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus
          illo explicabo dignissimos inventore quos culpa ad velit expedita
          repudiandae officiis corrupti, veritatis similique, autem ipsum odit
          nemo at, fugiat fuga?
        </p>
        <img src="src/images/rone.jpg" />
        <h1>Rone</h1>
      </div>
    </div>
  </section>
  <!-- About section -->
  <section id="about-section">
    <div class="main-about-div">
      <div class="about-left-div">
        <div class="about-left-div-header">
          <h1>ABOUT US</h1>
          <p>
            Welcome to Fabadaro, the ultimate haven for manga lovers! Our website is dedicated to bringing you the latest, rarest, and most beloved manga titles from around the world. Whether you’re a seasoned collector or just starting your manga journey, Fabadaro is your one-stop shop for all things manga.

            We believe in connecting fans with stories that inspire, excite, and transport them to new worlds. Our mission is to make manga accessible, enjoyable, and a part of your everyday life. At Fabadaro, every page tells a story—and every story matters.
          </p>

        </div>
      </div>
      <div class="about-right-div"></div>
    </div>
  </section>
  <!-- Contact section -->
  <section id="contact-section">
    <div class="main-contact-div">
      <div class="contact-top-div">
        <div class="contact-header-div">
          <h1>Contact Us</h1>
          <h3>.......</h3>
          <div class="contact-header-div-description">
            <p>
              We’d love to hear from you! At Fabadaro, your questions, suggestions, and feedback are important to us. Whether you need help with an order, want to inquire about a manga, or just want to share your thoughts, our team is here to assist you.
            </p>
          </div>
        </div>
      </div>
      <div class="contact-bottom-div">
        <div class="contact-first-container">
          <i class="fa-solid fa-house"></i>
          <h1>Visit Us</h1>
          <p>
            Come explore the world of manga at Fabadaro! Whether online or in person, we welcome all manga enthusiasts to discover our collection, find rare gems, and immerse themselves in captivating stories.
          </p>
          <p>Calamba City, Laguna, Philippines</p>
        </div>
        <div class="contact-second-container">
          <i class="fa-solid fa-phone"></i>
          <h1>Call Us</h1>
          <p>
            Have questions or need assistance? Our friendly team at Fabadaro is just a phone call away! Whether it’s about an order, a manga recommendation, or any inquiry, we’re here to provide quick and helpful support.
          </p>
          <p>(+63) 939 727 1618</p>
        </div>
        <div class="contact-third-container">
          <i class="fa-solid fa-envelope"></i>
          <h1>Contact Us</h1>
          <p>
            Prefer to write to us? At Fabadaro, we’re always ready to hear from you via email. Whether it’s a question about our manga collection, a suggestion, or feedback, your message matters to us.
          </p>
          <p>fabadaro@gmail.com</p>
        </div>
      </div>
    </div>
  </section>
  <script src="scripts/index.js"></script>
</body>
<footer></footer>

</html>