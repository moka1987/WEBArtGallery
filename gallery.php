<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ArtGallery - გალერეა გვერდი 1</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header class="hero-header">
  <div class="overlay">
    <h1><a href="index.php" class="logo">ArtGallery</a></h1>
    <nav>
      <ul class="menu-left">
        <li><a href="index.php" class="active">მთავარი</a></li>
        <li><a href="gallery.php">გალერეა</a></li>
        <li><a href="about-us.php">ჩვენს შესახებ</a></li>
        <li><a href="contact.php">კონტაქტი</a></li>
      </ul>
      <ul class="menu-right">
        <?php if (!isset($_SESSION['user'])): ?>
          <li><a href="login.php">შესვლა</a></li>
          <li><a href="register.php">რეგისტრაცია</a></li>
          <li><a href="logout.php">გამოსვლა</a></li>
        <?php else: ?>
          <li><?= htmlspecialchars($_SESSION['user']) ?></li>
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
  <section class="gallery">
    <h2>გალერეა</h2>
    <div class="gallery-grid">
      <!-- 12 ნახატი -->
      <div class="gallery-item">
        <img src="images/CIMG4327.jpg" alt="ძველი შუამთა">
        <p>ძველი შუამთა</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="1">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="1">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/CIMG4479.jpg" alt="გომბორი">
        <p>გომბორი</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="2">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="2">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/CIMG43495.jpg" alt="შუამთის გზა">
        <p>შუამთის გზა</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="3">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="3">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/CIMG446777.jpg" alt="სამი მოხუცი">
        <p>3 მოხუცი</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="4">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="4">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/CIMG1309.jpg" alt="ნატურმორტი 1">
        <p>ნატურმორტი</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="5">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="5">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/1234დდდ.jpg" alt="კავკასიონის ხედი">
        <p>კავკასიონი</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="6">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="6">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/12dgbsdc.jpg" alt="ნატურმორტი 2">
        <p>ნატურმორტი</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="7">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="7">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/CIMG4289.jpg" alt="შიომღვიმე">
        <p>შიომღვიმე</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="8">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="8">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/DSC_0218.jpg" alt="მოხუცი სოციალურ ქსელში">
        <p>მოხუცი სოციალური ქსელიდან</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="9">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="9">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/12adffas.jpg" alt="გზაში">
        <p>გზაში</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="10">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="10">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/CIMG4313.jpg" alt="აკვარიუმი">
        <p>აკვარიუმი</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="11">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="11">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>

      <div class="gallery-item">
        <img src="images/CIMG44931.jpg" alt="ავტოპორტრეტი">
        <p>ავტოპორტრეტი</p>
        <form method="POST" action="add_to_cart.php">
          <input type="hidden" name="product_id" value="12">
          <a href="add_to_cart.php?id=<?= $product_id ?>" class="add-to-cart">დამატება კალათაში</a>
        </form>
        <form method="POST" action="buy_now.php">
          <input type="hidden" name="product_id" value="12">
          <button type="submit" class="buy-now">ყიდვა ახლავე</button>
        </form>
      </div>
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

<script src="script.js"></script>gallery1.html
</body>
</html>