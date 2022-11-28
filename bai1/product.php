<?php
$sp = ' ';
$gia = ' ';
$phantram = ' ';
$result1 = ' ';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $sp = $_POST['sp'];
    $gia = $_POST['gia'];
    $phantram = $_POST['phantram'];
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
    Mô tả của sản phẩm <input type="text" name="sp" id="" value="<?php echo $sp; ?>">
    <br>
    Giá niêm yết của sản phẩm <input type="text" name="gia" id="" value="<?php echo $gia; ?>">
    <br>
    Tỷ lệ chiết khấu (phần trăm) <input type="" name="phantram" id="" value="<?php echo $phantram; ?>">
    <br>
    <input type="submit" value="Calculate Discount">
    <p>ket qua la : <?php echo $result1 ;?></p>
    </form>
</body>
</html>     