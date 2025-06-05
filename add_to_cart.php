<?php
session_start();

// შეამოწმე რომ გადმოცემულია პროდუქტის ID
if (isset($_GET['id'])) {
    $product_id = (int) $_GET['id'];

    // თუ cart არ არის ინიცირებული, შექმენი ცარიელი მასივი
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // დაამატე პროდუქტი მხოლოდ ერთხელ (არიდებს დუბლირებას)
    if (!in_array($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $product_id;
    }
}

// დააბრუნე მომხმარებელი გალერეაში ან წინა გვერდზე
header('Location: gallery.php');
exit;
