<?php
session_start();

// შეამოწმე, არის თუ არა მომხმარებელი ავტორიზებული
if (!isset($_SESSION['user'])) {
    // თუ არაა ავტორიზებული, გადაამისამართე შესვლის გვერდზე
    header('Location: login.php');
    exit;
}

// შეამოწმე, არის თუ არა კალათაში რამე
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<p>თქვენი კალათა ცარიელია. <a href='gallery.php'>გალერეაში დაბრუნება</a></p>";
    exit;
}

// აქ ჩვეულებრივად მოხდებოდა შეკვეთის შენახვა ბაზაში, მაგრამ ამ შემთხვევაში უბრალოდ ვიტყვით რომ შეკვეთა წარმატებულია

// გავწმინდოთ კალათა
$_SESSION['cart'] = [];

// წარმატების შეტყობინება
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>ყიდვა დასრულდა</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>გილოცავთ!</h2>
    <p>შეკვეთა წარმატებით განთავსდა.</p>
    <p>მადლობა რომ იყენებთ ჩვენს არტგალერეას!</p>
    <a href="gallery.php" class="button">გალერეაში დაბრუნება</a>
  </div>
</body>
</html>
