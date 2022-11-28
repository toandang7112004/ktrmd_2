<?php
// cách khai báo static
class Person {
    public static $Name = 'hoàng đăng toàn';
    public static $Age = 18;
    public static function getName(){
        return "PRO"     ;
    } 
    public function getAge() {
        return"GAD"  ;
    }
}

//in
//tên class ::tên thuộc tính
//tên class ::tên phương thức
echo Person::getName();
echo Person::$Name;
// nếu muốn truy cập tới thuộc tính tĩnh trong class .sử dụng cú pháp self::$tenthuoctinh và self::$tenphuongthuc
//nếu muons truy cập từ phương thức tĩnh đến phuong thức bình thường thì thông qua bước không gian

