<?php
session_start();

$messages_file = 'messages.txt';
$messages = file_exists($messages_file) ? file($messages_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];
?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ArtGallery - მთავარი</title>
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
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" fill="#fff">
              <path d="M7 18c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm10 
                0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zM3.8 15.4l.7 
                2.4 2.8-2.3 1.7-1.4-4.4-6.4-1 .5-1.4 6.6zM19 9H5.5L4.1 
                3H1.8v2h1.6l3 8.2 4 3.3 5.6-4.9-2.1-3.7z"/>
            </svg>
            <span class="cart-count"><?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?></span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<main class="container">
  <section class="intro">
    <h2>მოგესალმებით ArtGallery-ში!</h2>
    <p>ეს არის ხელოვნების მოყვარულთა სივრცე!</p>
    <p>ხელოვნება — ეს არის ფერის, ემოციის და ფორმის ენა.</p>
    <p>ჩვენი ონლაინ გალერეა გაძლევთ შესაძლებლობას, შეეხოთ სილამაზეს და აღმოაჩინოთ ახალი სამყაროები.</p>
    <p>კოლექციონერებს და ბიზნესმენებს შეუძლიათ შეიძინონ ნიჭიერი და პერსპექტიული მხატვრების ნამუშევრები.</p>
    <p>დაათვალიერე უნიკალური ნახატები, იპოვე შთაგონება, და გახდი ხელოვნების სამყაროს ნაწილი.</p>
    <a href="gallery.php" class="explore-btn">დაათვალიერე გალერეა</a>

    <?php if (isset($_SESSION['user'])): ?>
      <p><a href="upload.php" class="button">დატოვე კომენტარი და ატვირთე სურათი</a></p>
    <?php else: ?>
      <p>თუ გსურს სურათის ატვირთვა და კომენტარის დატოვება, გთხოვ <a href="login.php">შეხვიდე</a> ან <a href="register.php">დარეგისტრირდე</a>.</p>
    <?php endif; ?>
  </section>
</main>

<footer>
  <p>&copy; <?= date("Y") ?> ხელოვნება</p>
  <p>E-mail: art@gmail.com</p>
  <p>ტელეფონი: +995598111111</p>
</footer>
</body>
</html>
