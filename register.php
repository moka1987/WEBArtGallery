<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username && $password) {
        // პაროლის ჰეშირება უსაფრთხოებისთვის
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // შეინახე მომხმარებელი users.txt ფაილში
        $line = $username . "|" . $hashedPassword . PHP_EOL;
        file_put_contents("users.txt", $line, FILE_APPEND | LOCK_EX);

        $message = "რეგისტრაცია წარმატებით დასრულდა!";
    } else {
        $message = "გთხოვთ შეავსოთ ორივე ველი.";
    }
}
?>

<!DOCTYPE html>
<html lang="ka">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>რეგისტრაცია</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>რეგისტრაცია</h2>
  <?php if (isset($message)) echo "<p>$message</p>"; ?>

  <form method="POST" action="register.php">
    <label>მომხმარებელი: <input type="text" name="username" required></label><br>
    <label>პაროლი: <input type="password" name="password" required></label><br>
    <button type="submit">დარეგისტრირება</button>
  </form>
</body>
</html>
