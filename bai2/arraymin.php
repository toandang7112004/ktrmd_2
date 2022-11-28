<?php
//array_slice():cắt bỏ phần tử của mảng, giữ lại những phần tử đã chọn
$arr = [4,1,3,6,0,9];
$min = $arr[0];
foreach (array_slice($arr,1) as $key => $value){
    if($arr[$key] < $min){
        $min = $arr[$key];
    };
};
echo '<pre>';
print_r($min);
echo '</pre>';