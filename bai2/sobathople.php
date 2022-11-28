<?php
if($_SERVER=['REQUEST_METHOD'] == 'POST'){
    $X = $_POST['x'];
    $caculate = $_POST['caculate'];
    $Y = $_POST['y'];
    
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
        số x <input type="text" name="x" id="">
        <br>
        phép tính <input type="text" name="caculate" id="">
        <br>
        số y <input type="text" name="y" id="">
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>