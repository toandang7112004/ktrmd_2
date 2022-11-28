<?php
//bai2
// $age =18;
// if($age>=18){
//     echo "bạn được uống bia" ;
// }
//bai3
// $money = true;
// $_age =18;
// if($_age >= 18 && $money == true){
//     echo "bạn được uống bia";
// }
//bai4
// $money = true;
// $_age = 18
// if($_age>18||$money == true){
//     echo "bạn được uống bia";
// }
//bai5
// $age =18;
// if(!($age>=18)){
//     echo "bạn phải uống nước ngọt";
// }
//bai6
// $money = true;
// $quan_open = true;
// $cho_no = true;
// if($quan_open){
//     if ($money || $cho_no ){
//         echo "bạn được nhậu ";
//     } else{
//         echo "bạn k đc nhậu";
//     }
// }else{
//     echo "bạn k đc nhậu";
// }
//bai7
// $money = true;
// $quan_open = true;
// $cho_no = true;
// if($quan_open){
//     if ($money || $cho_no ) {
//         echo "bạn được nhậu  ";
//     }
// }else{
//     echo " bạn phải về nhà";
// }
//bai9
// $day = 7;
// switch (true) {
//     case ($day ==2||$day==3||$day==4||$day==5||$day==6):
//         echo "đi làm";
//         break;
//     case  ($day ==7): 
//         echo "sinh hoạt CLB";
//         break;
//     default:
//         echo "relax";
//         break;
// }
//bai11
// $month =2;
// switch ($month) {
//     case 2:
//         echo "31 ngày";
//         break;
//     case 3:
//         echo"28 ngày";
//         break;
//     default:
//         echo"30 ngày";
//         break;
// }
//bai 12
// $day = 6;
// switch ($day) {
//     case 2:
//     case 3:
//     case 4:
//     case 5:
//     case 6:
//         echo "đi làm";
//         break;
//     case 7: 
//         echo "sinh hoạt CLB";
//         break;
//     default:
//         echo "relax";
//         break;
// }
//bai13
// $age =17;
// $ketqua = ($age >= 18) ? 'uống bia':'uống rượu';
// echo $ketqua;
//bai14
// $day = 7;
// switch (true) {
//     case ($day>= 2 && $day<= 6):
//         echo "đi làm";
//         break;
//     case  ($day ==7): 
//         echo "sinh hoạt CLB";
//         break;
//     default:
//         echo "relax";
//         break;
// }
//bai15
// for($i=0 ; $i <= 5; $i++){
//     echo $i;
// }
//bai16
// for($i = 5; $i < 6; $i ++) {
//     for($j = 1; $j <= 10; $j ++) {
//         echo "$i x $j = " . ($i * $j);
//         echo "<br>";
//     }
// }
//bai17
// for($i = 1 ; $i <= 100 ; $i++){
//     if($i % 2 == 0){
//         echo $i;
//         echo "<br>";
//     }
// }
//bai18
// for($i = 100 ; $i > 1 ; $i--){
//         if($i % 2 == 1){
//             echo $i;
//             echo "<br>";
//         }
//     }
//bai19
// $tong = 0;
// for($i = 0 ; $i <= 10 ; $i++){
//      $tong = $tong + $i;
// }
// echo $tong;
//bài20
// $i=0;
// while($i <= 5){
//     echo $i;
//     $i++;
//     echo "<br>";
// }
//bai21
// $i=10;
// while($i >= 1){
//     echo $i;
//     $i--;
//     echo "<br>";
// }
//bai22
// $i =0;
// do {
//     echo $i++;
//     echo "<br>";
// } while ($i <= 5);
//bai23
// $i =10;
// do {
//     echo $i--;
//     echo "<br>";
// } while ($i >= 5);
//bai24
// for($i = 1; $i <= 10; $i++){
//     if ($i == 5){ 
//      break;
//     }
//     echo $i;
// }
//bai25
// for($i = 1; $i <= 5; $i++){
//     if ($i == 3){
//         continue;
//     }
//     echo $i;
// }
//bai26
// for($i = 1; $i <= 10; $i++){
//     if ($i %2 == 1){ 
//      continue;
//     }
//     echo $i;
// }
//bâi27
$html = '<table border = "1">';
for($i = 1; $i < 9; $i++){
    $html .='<tr>';
    for($j = 1; $j <= 3; $j++){
        $html .='<td>'. $j . '</td>';
    }
    $html .='</tr>';
}
$html .= '</table>';

echo $html;