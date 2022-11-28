<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    if($username =='admin' && $password =='admin'){
        echo "Welcome $username to website";
    }else{
        echo "Login Error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form action="" method="post">
            <h1>Login</h1>
            <br>
            Username: <input type="text" name="username">
            <br>
            Password: <input type="password" name="password">
            <br>
            <button type="submit">Sign in</button>
        </form>
    </div>
</body>
</html>