<?php
    class HCN{
        //thuoc tinh
        public $dai='';
        public $rong='';

        //ham khoi tao
        public function _construct($ts_dai,$ts_rong){
            $this->dai = $ts_dai;
            $this->rong = $ts_rong; 
        }


        //setter
        public function setDai($ts_dai){
            $this->dai=$ts_dai;
        }
        public function setRong($ts_rong){
            $this->rong=$ts_rong;
        }


        //getter
        public function getDai(){
            return $this ->dai;
        }
        public function getRong(){
            return $this ->rong;
        }

        //phuong thuc
        public function tinhChuVi(){
            $ket_qua1  = ($this->dai + $this->rong)*2; 
            echo 'chu vi la :'.$ket_qua1;
        }
        public function tinhDienTich(){
            $ket_qua2 = $this->dai * $this->rong;
            echo 'dien tich la :'.$ket_qua2;
        }
    };
        //khoi tao doi tuong
        $hcn=new HCN(20,21);


        //thiet lap gia tri
        // $hcn-> dai = 20;
        // $hcn-> rong = 30;
        $hcn ->setDai(20);
        $hcn ->setRong(10);


        //truy cap gia tri thuoc tinh
        echo $hcn -> getDai();
        echo $hcn -> getRong();


        //truy cap phuong thuc
         $hcn-> tinhChuVi();
         echo '<br>';
         $hcn-> tinhDienTich();
         echo '<pre>';
         print_r($hcn);
         echo '</pre>';