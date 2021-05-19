<?php include('db.php');

$id = $_GET['id'];
$back_link = $_SERVER['HTTP_REFERER'];

# получение информации о конкретной записи
$data = $db->query("SELECT * FROM `lesson-8` WHERE `id` = $id")->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
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
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <h5 class="frame-heading">
                                Вы точно хотите удалить <?php echo $data[0]['first_name']?> из БД?
                            </h5>
                            <div class="frame-wrap">
                                <form method="POST" action="deleteON.php">
                                  <table class="table m-0">
                                      <thead>
                                          <tr>
                                              <th>#</th>
                                              <th>First Name</th>
                                              <th>Last Name</th>
                                              <th>Username</th>
                                              <th>Actions</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <th scope="row"><?php echo $data[0]['s_n']?></th>
                                              <td><?php echo $data[0]['first_name']?></td>
                                              <td><?php echo $data[0]['last_name']?></td>
                                              <td><?php echo $data[0]['user_name']?></td>
                                              <td class="d-flex">
                                                  <button class="btn btn-danger mr-2" type="button">Удалить</button>
                                                  <a href="<?php echo $back_link?>" class="btn btn-info">Назад</a>
                                              </td>
                                          </tr>
                                          <tr>
                                            <td colspan="4"><?php echo $data[0]['some_text']?></td>
                                          </tr>
                                      </tbody>
                                  </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
