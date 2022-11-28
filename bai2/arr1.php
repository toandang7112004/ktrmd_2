<?php
$books = ['van','su','dia'];
//truy xuat
$books = [
    1=> 'van',
    2=>'su',
    3=> 'dia'
];
//in
echo '<pre>';
print_r($books);
echo '</pre>';
//thay doi
$books[0] = 'vanhoc';
//xoa
// unset($books[0]);
//lau do dai
echo count($books);
echo '<br>';
//duyet mang
foreach ( $books as $key => $value ) {
    echo $value .'<br>';
}


for($i = 0 ; $i <count($books) ; $i++) {
    echo $books[$i] .'<br>';
}