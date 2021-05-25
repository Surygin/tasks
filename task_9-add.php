<?php 

session_start();

include('db/db-for9.php');

$text = $_POST['text'];

# получение информации о всех пользователях
$sql = $db->query("SELECT * FROM `lesson-9` WHERE text = $text")->fetchAll(PDO::FETCH_ASSOC);

# $insert = $db->prepare("SELECT * FROM `lesson-9` WHERE text =:some_text");
# $insert->execute([':some_text', $text]);
# $sql = $insert->fetch(PDO::FETCH_ASSOC);

var_dump($sql);

if (!empty($sql)){
    $_SESSION['danger'] =  'Данная запись уже имеется в базе!';
    header('Location:http://localhost:8888/phpStep10/tasks/task_9.php');
    exit;
};


$insert = $db->prepare("INSERT INTO `lesson-9` (`text`) VALUES (:some_text)");
$insert->bindParam(":some_text", $text);
$insert->execute();
$_SESSION['success'] =  'Запись добавлена!';
header('Location:http://localhost:8888/phpStep10/tasks/task_9.php');
?>
