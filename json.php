<?php
//For encoding into json
$arr = ['hello'=>'name',"name"=>'email',"hii"=>'phone'];
$json = json_encode($arr,JSON_PRETTY_PRINT);
echo $json;

//For decoding json into associative array or php object format
$decode = json_decode($json,true);
print_r($decode);
echo $decode['hello'];
?>