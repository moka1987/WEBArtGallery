<?php
session_start();

// ფაილის ატვირთვის საქაღალდის შექმნა თუ არ არსებობს
$uploadDir = 'uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir);
}

// მონაცემების მიღება
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// ფაილის ატვირთვა
$filename = '';
if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
    $originalName = basename($_FILES['attachment']['name']);
    $filename = uniqid() . '_' . $originalName;
    move_uploaded_file($_FILES['attachment']['tmp_name'], $uploadDir . $filename);
}

// მასივი მონაცემებისთვის
$data = [
    'მომხმარებელი' => $_SESSION['user'] ?? 'სტუმარი',
    'სახელი' => $name,
    'ელ-ფოსტა' => $email,
    'შეტყობინება' => $message,
    'ფაილი' => $filename,
    'დრო' => date('Y-m-d H:i:s'),
];

// შეტყობინების სტრიქონად გარდაქმნა
$line = implode(' | ', $data) . "\n";

// ფაილში შეტყობინების ჩაწერა
file_put_contents('messages.txt', $line, FILE_APPEND);

// ქუქი შექმნა (მაგალითად, ბოლო გაგზავნის დრო)
setcookie('last_contact', date('Y-m-d H:i:s'), time() + 3600);

echo "შეტყობინება წარმატებით გაიგზავნა!";
?>