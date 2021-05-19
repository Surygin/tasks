<?php 

include('db/for-9.php');

$text = $_POST['text'];

# var_dump($text);

# добавление записи
# $query = $db->query("INSERT INTO `lesson-9` (text) VALUES (`$text`)");

$insert = $db->prepare("INSERT INTO `lesson-9` (`text`) VALUES (:some_text)");
$insert->bindParam(":some_text", $text);

header('Location:http://localhost:8888/phpStep10/tasks/task_9-new.php');

?>