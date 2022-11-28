<?php
$info = [
    'name' => 'iphonex',
    'price' =>'20000',
    'color' => 'black',
];
//lay do dai
echo count($info);
echo '<br>';
//truy xuat iphonex
echo $info['name'];
//thay doi iphonex =>inphonex Promax
$info['name'] = 'inphonex Promax';
//xoa color
unset($info['color']);
//in mang
echo '<pre>';
print_r($info);
echo '</pre>';
//duyet mang
foreach ($info as $key => $value){
    echo $value. '<br>';
}