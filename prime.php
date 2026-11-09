<?php
function prime($num){
    for($i=2;$i<$num;$i++){
if($num%$i==0){
    echo"$num is not prime";
    return;
}
    }
    echo"$num is prime";
 

}
$number=9;
prime($number);
?>