<?php
function factor($num){
    $factorial=1;
    for($i=1;$i<=$num;$i++){
        
        $factorial=$factorial*$i;
    }
    return $factorial;
}
$number=4;
echo factor($number);
?>