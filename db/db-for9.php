<?php 

$dbhost = "localhost";
$dbname = "php-step10";
$user_login = "admin";
$user_psw = "1234";

// Обработка ошибок подключения
try {
  $db = new PDO("mysql:host=localhost;dbname=$dbname", "$user_login", "$user_psw");
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage();
  die();
}



?>