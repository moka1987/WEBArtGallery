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
<main>
  <section class="about-us">
    <h2>ჩვენს შესახებ</h2>
    <p>
      ArtGallery შეიქმნა იმისათვის, რომ მოახლოოს ხელოვნება და მისი ძალა ყველასთვის. 
      ჩვენ ვცდილობთ ხელოვნების უნიკალური ნიმუშები მოვიტანოთ თქვენს სახლსა და გულში.
    </p>
    <p>
      ჩვენს გალერეაში თავმოყრილია როგორც თანამედროვე, ისე კლასიკური სტილის ნახატები, რომლებიც შექმნილია ტალანტოვანი მხატვრების მიერ მთელი მსოფლიოს მაშტაბით.
    </p>
    <p>
      ჩვენი მისიაა ხელი შევუწყოთ შემოქმედებითობას, აღმოვაჩინოთ ახალი მხატვრები და განვახორციელოთ ხელოვნების ონლაინ საზოგადოება, სადაც ყველა შეძლებს დასაინტერესებლად და შთაგონების მისაღებად.
    </p>
    <p>
      გთხოვთ, შემოუერთდით ჩვენს კოლექციას და გახდით ხელოვნების ნაწილი.
      კოლექციონერებს შეუძლიათ სურვილისამებრ შეიძინონ სასურველი ნამუშევარი
    </p>
  </section>
</main>
<footer>
  <p>&copy; <?= date("Y") ?> ხელოვნება</p>
  <p>E_mail: art@gmail.com</p>
  <p>Telephone: +995598111111</p>
</footer>
<script src="script.js"></script>
</body>
</html>