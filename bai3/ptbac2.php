<?php   
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $c = $_POST['n3'];
}
class QuadraticEquation{
    public $a = '';
    public $b = '';
    public $c = '';
    public function __construct($ts_a, $ts_b, $ts_c){
        $this->a = $ts_a;
        $this->b = $ts_b;
        $this->c = $ts_c;
    }
    public function setA($a){
        $this->a = $a;
    }
    public function getA(){
        return $this->a;
    }
    public function setB($b){
        $this->b = $b;
    }
    public function getB(){
        return $this->b;
    }
    public function setC($c){
        $this->c = $c;
    }
    public function getC(){
        return $this->c;
    }
    public function getDiscriminant(){
        return ($this->b*$this->b) - (4 * $this->a * $this->c);
    }
    public function getRoot1(){
        $delta = $this->getDiscriminant();
        if ($delta>0){
            $x1 = (- $this ->b + sqrt ( $delta )) / (2 * $this ->a);
            $x2 = (- $this ->b - sqrt ( $delta )) / (2 * $this ->a);
            echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
        }else if($delta == 0){
            $x3 = (- $this ->b / (2 * $this ->a));
            echo "Phương trình có nghiệm kép: x1 = x2 = " . $x3;
            
        }else{
            echo "pt vô nghiệm";
        };
    }
}
//khoi tao doi tuong
$ptb2 = new QuadraticEquation($a, $b, $c);
$ptb2 ->getRoot1() ;
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
        số a <input type="text" name="n1" id="">
        <br>
        số b <input type="text" name="n2" id="">
        <br>
        số c <input type="text" name="n3" id="">
        <br>
        <input type="submit" value="Tính">
    </form>
</body>
</html>