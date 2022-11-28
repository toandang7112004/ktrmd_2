<?php
//ktr nguoi dung gui du lieu hay chua
    if (isset($_GET['Username']) || isset($_GET['Password'])){
    echo $_SERVER['REQUEST_METHOD'];
//hien thi thoong tin
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
//khai bao
    $Username = $_GET['Username'];
    $Password = $_GET['Password'];
//hien thi
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
    <form action="" method="get">
        Username <input type="text" name="Username" id=""> <br>
        Password <input type="password" name="Password" id=""> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>