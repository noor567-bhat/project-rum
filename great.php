<?php
 function largest($a,$b,$c){
    if($a>$b){
        if($a>$c){
            echo"$a is greatest";
        }else{
           echo"$c is greatest";
        }
    }
    else{
         echo"$b is greatest";
    }
 }
$x=10;
$y=15;
$z=3;
largest($x,$y,$z);


?>