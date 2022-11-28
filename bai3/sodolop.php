<?php
class Person {
    //thuoc tinh
    public $name = '';
    public $age = 0;
    //phuong thuc
    public function _construct(){
    }
    public function sayHello(){
        return "Hello:" .$this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function getName(){
        return $this->name;
    }
    //setter
    public function setName($name){
        $this->name = $name;
    }
    public function setAge($age){
        $this->age = $age;
}
}
$obj = new Person;
//thiet lap gia trị
$obj->setName('HOANGDANGTOAN');
$obj->setAge(18);
//gọi các phương thức
echo $obj->sayHello();
echo'<br>';
echo $obj->getAge();
echo'<br>';
echo $obj->getName();
echo'<br>';
//in
echo'<pre>';
print_r($obj);
echo'</pre>';
