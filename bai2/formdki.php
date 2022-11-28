<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo'<pre>';
    // print_r($_POST);
    // echo'</pre>';
    $login = $_POST['login'] ;
    $mail = $_POST['mail'] ;
    $sdt = $_POST['sdt'] ;
    if(empty($login) || empty($mail) || empty($sdt)){
        echo "lỗi";
    };
};
    if(filter_var($email, FILTER_VALIDATE_EMAIL) == ''){
        echo "true";
    }else{
        echo "false";
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
    <div>
        <h1>ĐĂNG KÍ </h1>
        <form action="" method="post">
        Tên người dùng <input type="text" name="login" id="">
        <br>
        Email <input type="text" name="mail" id="">
        <br>
        Số điện thoại <input type="text" name="sdt" id="">       
        <br>
        <input type="submit" value="Đăng Kí">
    </form>
</div>
</body>
</html>