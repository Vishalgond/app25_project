<?php
//local variable
function demo(){
    $x = 10;
    $y = 20;
    echo $x,$y;
}
// echo $x;
// echo $y;
// demo();
$a = 10;
$b = 20;
function globalVar(){
    global $a,$b;
    echo $a,$b;
}
// globalVar();
// echo "this is the global variable : ".$a;
function staticVar(){
    static $a=10;
    $a++;
    echo $a;
}
staticVar();
staticVar();
staticVar();
?>