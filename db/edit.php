<?php include('db.php');

$id = $_GET['id'];
$back_link = $_SERVER['HTTP_REFERER'];

# получение информации о конкретной записи
$data = $db->query("SELECT * FROM `lesson-8` WHERE `id` = $id")->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="description" content="Chartist.html">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
  <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="../css/vendors.bundle.css">
  <link id="appbundle" rel="stylesheet" media="screen, print" href="../css/app.bundle.css">
  <link id="myskin" rel="stylesheet" media="screen, print" href="../css/skins/skin-master.css">
  <link rel="stylesheet" media="screen, print" href="../css/statistics/chartist/chartist.css">
  <link rel="stylesheet" media="screen, print" href="../css/miscellaneous/lightgallery/lightgallery.bundle.css">
  <link rel="stylesheet" media="screen, print" href="../css/fa-solid.css">
  <link rel="stylesheet" media="screen, print" href="../css/fa-brands.css">
  <link rel="stylesheet" media="screen, print" href="../css/fa-regular.css">
  <title>Редактирование записи</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="offset-lg-3 col-lg-6">
      <form class="mt-5" method="POST" action="editON.php">
        <h2>Изменить запись</h2>
        <input type="hidden" value="<?php echo $data[0]['id']?>">
        <p>Изменить имя
          <input class="form-control" type="text" name="first_name" value="<?php echo $data[0]['first_name']?>">
        </p>
        <p>Изменить Фамилию
          <input class="form-control" type="text" name="last_name" value="<?php echo $data[0]['last_name']?>">
        </p>
        <p>Изменить Никнейм
          <input class="form-control" type="text" name="user_name" value="<?php echo $data[0]['user_name']?>">
        </p>
        <p>Изменить текст
          <textarea class="form-control" name="some_text"><?php echo $data[0]['some_text']?></textarea>
        </p>
        <p>
          <input class="btn btn-primary mt-2" type="submit" value="Отправить">
          <a href="<?php echo $back_link?>" class="btn btn-info mt-2">Назад</a>
        </p>
      </form>
      </div>
    </div>
  </div>
</body>
</html>



