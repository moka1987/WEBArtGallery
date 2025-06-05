<?php
session_start();

// პროდუქციის კატალოგის სიმულაცია (დემო მიზნებისთვის)
$products = [
    1 => ['name' => 'ნახატი A', 'price' => 150],
    2 => ['name' => 'ნახატი B', 'price' => 200],
    3 => ['name' => 'ნახატი C', 'price' => 250],
];

// კალათიდან მონაცემების ამოღება
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

// თუ ყიდვა განხორციელდა
$purchase_success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['purchase'])) {
    // აქ შეიძლება დაემატოს ბაზაში შენახვა ან იმეილის გაგზავნა

    // კალათის გასუფთავება
    $_SESSION['cart'] = [];
    $cart = [];
    $purchase_success = true;
}
?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <meta charset="UTF-8">
  <title>კალათა</title>
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
<main class="container">
  <?php if ($purchase_success): ?>
    <div class="success-message">
      <p>გმადლობთ შესყიდვისთვის! თქვენი შეკვეთა მიღებულია.</p>
    </div>
  <?php endif; ?>

  <?php if (empty($cart)): ?>
    <p>თქვენი კალათა ცარიელია.</p>
    <a href="gallery.php" class="button">გალერეაში დაბრუნება</a>
  <?php else: ?>
    <table>
      <thead>
        <tr>
          <th>ნამუშევარი</th>
          <th>ფასი (₾)</th>
        </tr>
      </thead>
      <tbody>
        <?php $total = 0; ?>
        <?php foreach ($cart as $product_id): ?>
          <?php if (isset($products[$product_id])): ?>
            <tr>
              <td><?= htmlspecialchars($products[$product_id]['name']) ?></td>
              <td><?= number_format($products[$product_id]['price'], 2) ?></td>
            </tr>
            <?php $total += $products[$product_id]['price']; ?>
          <?php endif; ?>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <th>სულ:</th>
          <th><?= number_format($total, 2) ?> ₾</th>
        </tr>
      </tfoot>
    </table>

    <form method="post">
      <button type="submit" name="purchase" class="button">ყიდვა</button>
    </form>
  <?php endif; ?>
</main>

<footer>
  <p>&copy; <?= date("Y") ?> ხელოვნება</p>
</footer>
</body>
</html>
<?php if (!empty($_SESSION['cart'])): ?>
  <form action="buy_now.php" method="post">
    <button type="submit" class="button">შეიძინე ახლა</button>
  </form>
<?php endif; ?>
