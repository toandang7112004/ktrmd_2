<?php
include_once('db.php');
$sql = "SELECT * FROM `room`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// echo '<pre>';
// print_r($rows);
// die();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <div class="container">
        <div id="layoutSidenav_content">
            <main>
                <h2 class="mt-4"><i>Danh Sách Phòng</i></h2>
                <a class="btn btn-danger" href="index.php"><i>Trở về</i></a>
                <a class="btn btn-danger" href="addroom.php"><i>Thêm Room</i></a>
                <table class="table col-xl-12">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col-xl-3">id</th>
                            <th scope="col-xl-3">Tên phòng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $row):?>
                            <tr>
                                <td><?= $row->room_id ?></td>
                                <td><?= $row->name_room ?></td>
                                <td>
                                    <a class="btn btn-danger" href="deleteroom.php?id=<?=$row->room_id?>" role="button">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
                </table>
            </main>
        </div>
    </div>
    </div>
  </body>
</html>