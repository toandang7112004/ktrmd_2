<?php
include_once('db.php');
$sql2 = "SELECT * FROM `room`";
$stmt2 = $conn->query($sql2);
$stmt2->setFetchMode(PDO::FETCH_OBJ);
$rows2 = $stmt2->fetchAll();


// $ID = $_REQUEST['id'] ;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_REQUEST['name_room'] ;
    
    $err=[];
    
    if($name == ''){
        $err['name'] = 'Bạn chưa nhập tên phòng';
    }
    if(empty($err)){
        $sql = "INSERT INTO `room`( `name_room`) VALUES ('$name')";
        $conn->exec($sql);
        header("Location: indexroom.php");
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
    <title></title>
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
                                            <input class="form-control" id="inputEmail" type="text" name="name_room" placeholder="name@example.com" />
                                            <label for="">Tên Phòng</label>
                                            <span><?php if(isset($err['name'])){echo $err['name'];}?></span>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit">OK</button>
                                            <a href="indexroom.php" class="btn btn-danger"><i>BACK</i></a>
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