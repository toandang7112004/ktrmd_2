<?php
//ktr nguoi dung gui du lieu hay chua
    if($_SERVER['REQUEST_METHOD']=='POST'){
//hien thi thong tin
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
//khai bao
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
// xuat ra
    echo 'ten dang nhap :'.$Username;
    echo '<br>';
    echo 'mat khau la:'.$Password;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Username <input type="text" name="Username" id=""> <br>
        Password <input type="password" name="Password" id=""> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>