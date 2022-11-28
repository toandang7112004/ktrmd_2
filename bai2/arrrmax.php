<?php
$numbers = [
    [11 , 3 , 5 , 7],
    [2 , 4 , 6 , 1],
];
$max = $numbers[0][0];
foreach ( $numbers as $k1 => $arr){
    foreach ( $arr as $k2 => $value2 ){
        if($numbers[$k1][$k2]>$max){
            $max = $numbers[$k1][$k2];
        }
    }
}
echo $max;
