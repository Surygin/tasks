<?php 

session_start();

include('db/db-for9.php');

$text = $_POST['text'];

# получение информации о всех пользователях
$data = $db->query("SELECT * FROM `lesson-9`")->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $i) {
    if ($text == $i['text']){
        $_SESSION['message'] = ['msg' => 'error'];
        header('Location:http://localhost:8888/phpStep10/tasks/task_9.php');
        die;
    }

};

$insert = $db->prepare("INSERT INTO `lesson-9` (`text`) VALUES (:some_text)");
$insert->bindParam(":some_text", $text);
$insert->execute();

?>
