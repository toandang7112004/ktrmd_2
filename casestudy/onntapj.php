<?php
class a{
    public const pi = 300;
    public function getSalary($fator){
        return self:: pi * $fator;
    }
}
class b extends a{
    public function getSalary($fator){
        return self:: pi * $fator * 2;
    } 
}
$obj = new b();
echo $obj->getSalary(3);

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
    
</body>
</html>