<?php
//khai báo bien
$name = 'hoangdangtoan';
$gender = true;
$age = 18 ;
$sothich = ['thich','code'];
//khai báo hang
const PI= 3.14;
define('Pi2','3.14');
//xuất
//echo:string,number
//print:string,number
echo $gender;
echo '<br>';
print $gender; 
// var_dump: all,kiểu dữ liệu + kiểu dữ liệu
echo "<br>";
var_dump($gender);
echo "<br>";
var_dump($name);
echo "<br>";
//print_r: array,object
echo '<pre>';
print_r($sothich);
echo '</pre>';
?>