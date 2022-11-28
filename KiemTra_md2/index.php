<?php
include_once('db.php');
$sql = "SELECT * FROM `gender` JOIN patient 
ON gender.gender_id = patient.id_gender
JOIN `room`
ON patient.id_room = room.room_id;";
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
                <h2 class="mt-4"><i>Danh Sách Bệnh Nhân</i></h2>
                <a class="btn btn-danger" href="add.php"><i>Thêm Bệnh Nhân</i></a>
                <a class="btn btn-danger" href="indexroom.php"><i>Danh sách phòng</i></a>
                <table class="table col-xl-12">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col-xl-3">id</th>
                            <th scope="col-xl-3">Tên</th>
                            <th scope="col-xl-3">Giới Tính</th>
                            <th scope="col-xl-3">Phòng</th>
                            <th scope="col-xl-3">Ngày nhập viện</th>
                            <th scope="col-xl-3">Trạng thái</th>
                            <th scope="col-xl-3">Thông tin</th>
                            <th scope="col-xl-3">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $row):?>
                            <tr>
                                <td><?= $row->id ?></td>
                                <td><?= $row->name ?></td>
                                <td><?= $row->name_gender ?></td>
                                <td><?= $row->name_room ?></td>
                                <td><?= $row->day_hoppital ?></td>
                                <td><?= $row->status ?></td>
                                <td><?= $row->information ?></td>
                                <td>
                                    <a class="btn btn-danger" href="edit.php?id=<?=$row->id?>" role="button">Edit</a>
                                    <a class="btn btn-danger" href="delete.php?id=<?=$row->id?>" onclick="return confirm('Bạn có chắc muốn xóa không?');">Delete</a>
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

