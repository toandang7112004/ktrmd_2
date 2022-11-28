<?php
class Rectangle {
    public $width = 0;
    public $height = 0;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->width * $this ->height;
    }
    public function getPrimeter(){
        return ($this->width + $this ->height) * 2;
    }
    public function Display(){
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
    //khoi tao khoi tuong 
    $hcn = new Rectangle(19,5);

    //truy cập phương thức
    echo $hcn->getArea();
    echo '<br>';
    echo $hcn->getPrimeter();
    echo '<br>';
    echo $hcn->Display();