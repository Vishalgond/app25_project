<?php
// $arr = [
//     [
//         [1,2,3,4],
//         [2,34,5,5]
//     ]
// ];
// print_r($arr[0][0][0]);
// print_r($arr[0][1][0]);
$arr = ["name"=>["age"=>1,3,"x"=>4,5]];
// print_r($arr['name'][1]);
foreach($arr as $val):
    foreach($val as $v):
        echo $v;
    endforeach;
endforeach;
?>