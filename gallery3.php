<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ArtGallery - გალერეა გვერდი 1</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<header class="hero-header">
  <div class="overlay">
    <h1><a href="index.php" class="logo">ArtGallery</a></h1>
    <nav>
      <ul class="menu-left">
        <li><a href="index.php">მთავარი</a></li>
        <li><a href="gallery.php" class="active">გალერეა</a></li>
        <li><a href="about-us.php">ჩვენს შესახებ</a></li>
        <li><a href="contact.php">კონტაქტი</a></li>
      </ul>
      <ul class="menu-right">
        <?php if(!isset($_SESSION['user'])): ?>
          <li><a href="login.php">შესვლა</a></li>
          <li><a href="register.php">რეგისტრაცია</a></li>
        <?php else: ?>
          <li><?= htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8') ?></li>
          <li><a href="logout.php">გამოსვლა</a></li>
        <?php endif; ?>
        <li>
          <a href="cart.php" class="cart-icon" title="კალათა">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#fff" viewBox="0 0 24 24">
              <path d="M7 18c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm10 0c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm-13.222-2.576l.723 2.417 2.79-2.296 1.67-1.376-4.439-6.414-1.033.52-1.373 6.667zm15.222-6.424h-13.464l-1.41-6h-2.346v2h1.62l2.98 8.236 4.034 3.313 5.638-4.854-2.073-3.695z"/>
            </svg>
            <span class="cart-count">
              <?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
            </span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<main> 
<main>
  <section class="gallery">
    <h2>გალერეა</h2>
    <div class="gallery-grid">
      <p><strong>ბოდიშს გიხდით შეფერხებისთვის ნახატები მალე დაემატება :)</strong><p>
      <!-- 12 სურათი თითო გვერდზე -->
      <div class="gallery-item"><img src="images/art1.jpg" alt="ნახატი 1"><p>ნახატი 1</p></div>
      <div class="gallery-item"><img src="images/art2.jpg" alt="ნახატი 2"><p>ნახატი 2</p></div>
      <div class="gallery-item"><img src="images/art3.jpg" alt="ნახატი 3"><p>ნახატი 3</p></div>
      <div class="gallery-item"><img src="images/art4.jpg" alt="ნახატი 4"><p>ნახატი 4</p></div>
      <div class="gallery-item"><img src="images/art5.jpg" alt="ნახატი 5"><p>ნახატი 5</p></div>
      <div class="gallery-item"><img src="images/art6.jpg" alt="ნახატი 6"><p>ნახატი 6</p></div>
      <div class="gallery-item"><img src="images/art7.jpg" alt="ნახატი 7"><p>ნახატი 7</p></div>
      <div class="gallery-item"><img src="images/art8.jpg" alt="ნახატი 8"><p>ნახატი 8</p></div>
      <div class="gallery-item"><img src="images/art9.jpg" alt="ნახატი 9"><p>ნახატი 9</p></div>
      <div class="gallery-item"><img src="images/art10.jpg" alt="ნახატი 10"><p>ნახატი 10</p></div>
      <div class="gallery-item"><img src="images/art11.jpg" alt="ნახატი 11"><p>ნახატი 11</p></div>
      <div class="gallery-item"><img src="images/art12.jpg" alt="ნახატი 12"><p>ნახატი 12</p></div>
    </div>

    <!-- გვერდების გადამრთველი -->
    <div class="pagination">
      <a href="gallery.php" class="active">1</a>
      <a href="gallery2.php">2</a>
      <a href="gallery3.php">3</a>
    </div>
  </section>
</main>
<!-- Lightbox Overlay -->
<div id="lightbox" class="lightbox" style="display:none;">
  <span class="close">&times;</span>
  <img class="lightbox-img" src="" alt="დიდი ფოტო">
</div>

<footer>
  <p>&copy; <?= date("Y") ?> ხელოვნება</p>
  <p>E_mail: art@gmail.com</p>
  <p>Telephone: +995598111111</p>
</footer>

<script src="script.js"></script>gallery1.php
</body>
</html>