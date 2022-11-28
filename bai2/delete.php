<?php
$arr=[2,2,4,2,6,2];
$index=0;
$X=2;
for( $i=0 ; $i < count($arr) ; $i++){
    if($arr[$i] == $X){
        unset($arr[$i]);
        $index++;
    }
}
echo'<pre>';
echo($index);
echo '<br>';
print_r($arr);
echo'</pre>';
?>