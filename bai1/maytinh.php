<?php
$n1 = ' ';
$n2 = ' ';
$caculate = ' ';
$result = ' ';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';


    $n1 = $_POST['number1'];
    $caculate = $_POST['caculate'];
    $n2 = $_POST['number2'];

    switch ($caculate) {
    case '+':
        $result = $n1 + $n2;
        break;
    case '-':
        $result = $n1 - $n2;
        break;
    case '/':
        if($n2 == 0) {
         echo   $result = 'loi';

        }else{
           echo $result = $n1 / $n2;
        }
        break;
    case '*':
        $result = $n1 * $n2;
        break;
    default:
        # code...
        break;
    }

    // echo $result;
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
    <div class="content">
        <h1>Mô phỏng máy tính</h1>
        <form action="" method="post">
            <div class="toan">
                <span>số thứ 1</span>
                <input type="text" name="number1" id="" value="<?php echo $n1 ;?>">
            </div>
            <div class="toan">
                <span>Phép toán</span>
                <input type="text" name="caculate" id="" value="<?php echo $caculate ;?>" >
            </div>
            <div class="toan">
                <span>số thứ 2</span>
                <input type="text" name="number2" id="" value="<?php echo $n2 ;?>">
            </div>
            <div>
                <input type="submit" value="xem kết quả">
            </div>
            <div>
                <p>ket qua la : <?php echo $result ;?></p>
            </div>
        </form>
    </div>
</body>
</html>