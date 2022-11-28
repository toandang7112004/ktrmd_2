<?php
class StopWatch{
    private  $startTime = 0;
    private  $endTime = 10;
    public function __construct(){
        
    }
    //getter
    public function getStartTime(){
        return $this->startTime;
    }
    public function getEndTime(){
        return $this->endTime;
    }
};
    $objStopwatch=new Stopwatch();
    //truy cap thuoc tinh
    // echo $objStopwatch->startTime;
    // echo '<br>';
    // echo $objStopwatch->endTime;

    
    //truy cap phuong thuc
    echo $objStopwatch->getStartTime();
    echo '<br>';
    echo $objStopwatch->getEndTime();



































            // //setter
    // public function setstartTime($startTime){
    //     $this -> startTime = $startTime;
    // }
    // public function setstsendTime($ts_endTime){
    //     $this -> ts_endTime = $ts_endTime;
    // }
    // //getter
    // public function getstartTime(){
    //     return $this -> startTime;
    // }
    // public function getstsendTime(){
    //     return $this -> ts_endTime;
    // }
    // public function getElapsedTime(){
    //     echo $this->endTime - $this->startTime;
    // }
    // //phuong thuc
    // public function start(){
    //     $this->startTime=microtime(true);
    // }
    // public function stop(){
    //     $this->endTime=microtime(true);
    // }