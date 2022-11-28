<?php
$books = ['van','su','dia'];
//         0     1    2
//mang 1 chieu  
$books = [
    0 => 'van',
    1 => 'su',
    2 => 'dia' 
];
echo $books[0];
echo '<br>';
//mang lien ket
$info = [
    'ten' =>'Nguyen Van A',
    'ngaysinh' =>'18/10/2000',
    'diachi' => 'Ha Noi'
];
echo $info['ten'];

echo '<pre>';
print_r($books);
echo '</pre>';


echo '<pre>';
print_r($info);
echo '</pre>';

    foreach($books as $key => $value){
        ///key : 0 1 2
        //value  : van su dia
        echo $value .'<br>';
    }
    foreach($info as $key  => $value ){
        //key : ten ngay sinh diachi
        //value Nguyen Van A ,'18/10/2000','Ha Noi'
    }
        echo $value .'<br>';
?>