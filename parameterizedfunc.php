<?php
function calculator($a,$b,$operator){
    switch($operator){
        case '+':
            return $a+$b;
            // break;
        case '-':
            return $a-$b;
            // break;
        case '*':
            return $a*$b;
            // break;
        case '/':
            return $a/$b;
            // break;
        case '%':
            return $a%$b;
            // break;                
    }
}
$first = 10;
$second= 20;
$op = '-';
echo calculator($first,$second,$op);
?>