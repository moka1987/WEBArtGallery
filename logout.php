<?php
session_start();
session_destroy();
setcookie('username', '', time() - 3600); // წაშლა ქუქის
header('Location: index.php');
exit;
?>
