<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $found = false;

    if (file_exists("users.txt")) {
        $lines = file("users.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            list($savedUser, $hashedPass) = explode("|", $line);

            if ($username === $savedUser && password_verify($password, $hashedPass)) {
                $_SESSION['user'] = $username;
                $found = true;
                break;
            }
        }
    }

    if ($found) {
        header("Location: index.php");
        exit;
    } else {
        $error = "მომხმარებლის სახელი ან პაროლი არასწორია.";
    }
}
?>

<!DOCTYPE html>
<html lang="ka">
<head>
  <meta charset="UTF-8">
  <title>შესვლა</title>
</head>
<body>
  <h2>შესვლა</h2>
  <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

  <form method="POST" action="login.php">
    <label>მომხმარებელი: <input type="text" name="username" required></label><br>
    <label>პაროლი: <input type="password" name="password" required></label><br>
    <button type="submit">შესვლა</button>
  </form>

  <p>არ ხართ რეგისტრირებული? <a href="register.php">დარეგისტრირდით აქ</a>.</p>
</body>
</html>
