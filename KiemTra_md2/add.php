<?php
include_once('db.php');
global $conn;
$sql = "SELECT * FROM `gender`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$rows = $stmt->fetchAll();
// echo '<pre>';
// print_r($rows);
// die();

$sql1 = "SELECT * FROM `patient`";
$stmt1 = $conn->query($sql1);
$stmt1->setFetchMode(PDO::FETCH_OBJ);
$rows1 = $stmt1->fetchAll();
// echo '<pre>';
// print_r($rows1);
// die();

$sql2 = "SELECT * FROM `room`";
$stmt2 = $conn->query($sql2);
$stmt2->setFetchMode(PDO::FETCH_OBJ);
$rows2 = $stmt2->fetchAll();
// echo '<pre>';
// print_r($rows2);
// die();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name'] ;
    $gender = $_REQUEST['gender'] ;
    $room = $_REQUEST['room'] ;
    $date = $_REQUEST['date'] ;
    $infor = $_REQUEST['infor'] ;
    $status = $_REQUEST['status'] ;
 
    $err=[];
    
    if($name == ''){
        $err['name'] = 'Bạn chưa nhập tên';
    }
    if ($date==''){
        $err['date']='Bạn không thể để trống ngày nhập viện';
    }
    if ($infor ==''){
        $err['infor']='Bạn không thể để trống Thông Tin ';
    }
    if ($status ==''){
        $err['status']='Bạn không thể để trống trạng thái';
    }
  
    if(empty($err))
    {
        $sql = "INSERT INTO `patient`( `name`, `day_hoppital`, `status`, `information`, `id_gender`, `id_room`)
         VALUES ('$name','$date','$status','$infor','$gender','$room')";
        $conn->exec($sql);
    
        header('location:index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="text" name="name" placeholder="name@example.com" />
                                            <label for="">Tên</label>
                                            <span><?php if(isset($err['name'])){echo $err['name'];}?></span>
                                        </div>
                                        <select name="gender" class="form-control" id="">
                                            <?php foreach ($rows as $item) : ?>
                                                <option value="<?= $item->gender_id; ?>"><?= $item->name_gender ?></option>
                                            <?php endforeach; ?>
                                        </select><br>
                                        <select name="room" class="form-control" id="">
                                            <?php foreach ($rows2 as $items) : ?>
                                                <option value="<?= $items->room_id; ?>"><?= $items->name_room ?></option>
                                            <?php endforeach; ?>
                                        </select><br>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="date" name="date" placeholder="name@example.com" />
                                            <label for="">Ngày nhập viện</label>
                                            <span><?php if(isset($err['date'])){echo $err['date'];}?></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="text" name="status" placeholder="name@example.com" />
                                            <label for="">Trạng thái</label>
                                            <span><?php if(isset($err['status'])){echo $err['status'];}?></span>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="text" name="infor" placeholder="name@example.com" />
                                            <label for="">Thông tin</label>
                                            <span><?php if(isset($err['status'])){echo $err['status'];}?></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit">ADD</button>
                                            <a href="index.php" class="btn btn-danger"><i>BACK</i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>