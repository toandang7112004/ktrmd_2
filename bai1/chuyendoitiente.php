<?php
  $USD = ' ';
  $rate = '23.000';
  $VND = ' ';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $USD = $_POST['USD'];
    if($USD > 0){
        $VND =$USD*23.000 ;
    }else{
        echo $VND='lỗi';
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
</head>
<body>
    <form action="" method="post">
    số tiền USD <input type="text" name="USD" id="" value="<?php echo $USD; ?>">
    <br>
    <input type="submit" value="chuyển đổi">
    <p>VND="<?php echo $VND; ?>"</p>
    </form>
</body>
</html>