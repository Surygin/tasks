<?php require "db.php"?>

<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user_name = $_POST['user_name'];
$some_text = $_POST['some_text'];

# обновление записи в БД
function update_person($first_name, $last_name, $user_name, $text, $id) {
  global $db;
  $data = $db->query("UPDATE `lesson-8` SET `first_name` = $first_name, `last_name` = $last_name, `user_name` = $user_name, `some_text` = $text WHERE id = $id")->fetchAll(PDO::FETCH_ASSOC);
  return true;
}

update_person($first_name, $last_name, $user_name, $some_text, $id);

# $query = "UPDATE `article` SET `title` = :title, `descr` = :descr, `text` = :text, `category_id` = :cat, `img` = :img, WHERE `id` = :id";
# $params = [
#    ':id' => $id,
#    ':title' => $title,
#    ':descr' => $descr,
#    ':text' => $text,
#    ':cat' => $cat,
#    ':img' => $img
#];
#$stmt = $db->prepare($query);
#$stmt->execute($params);

header('Location:http://localhost:8888/%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5/tasks/task_8.php');
?>