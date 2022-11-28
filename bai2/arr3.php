<?php
$tusach = [
    ['Van','Su','Dia'],
    ['Toan','Ly','Hoa']
];
echo'<pre>';
print_r($tusach);
echo'</pre>';
foreach ($tusach as $key => $books){
    foreach ($books as $key => $book){
        echo '<br>'.$book;
    }
}
echo '<br>';
for($i=0; $i<count($tusach); $i++){
    for($j=0; $j<count($tusach[$i]); $j++){
        echo '<br>'.$tusach[$i][$j];
    }
}