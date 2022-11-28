<?php
$money1 = '';
$laisuat = ' ';
$sonam = ' ' ;
$result = ' ';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $money1 = $_POST['money1'];
    $laisuat = $_POST['laisuat'];
    $sonam = $_POST['sonam'] ;
    if($money1 > 0 && $laisuat > 0 && $sonam > 0){
        $result = $money1 + ($money1/100*$laisuat); 
    }else{
        $result = 'loi';
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
    Lượng tiền đầu tư ban đầu <input type="text" name="money1" id="" value="<?php echo $money1; ?>">
    <br>
    Lãi suất năm <input type="Float" name="laisuat" id="" value="<?php echo $laisuat; ?>">
    <br>
    Số năm đầu tư <input type="number" name="sonam" id="" value="<?php echo $sonam; ?>">
    <br>
    <input type="submit" value="Calculate ">
    <div>
        <p>ket qua la : <?php echo $result ;?></p>
    </div>
    </form>
</body>
</html>