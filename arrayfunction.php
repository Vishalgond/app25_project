<?php
// array_push(array,new element):-It used for add new element in 
// existing array.
// $arr = [1,3,4,5];
// array_push($arr,[6,5,6]);
// echo "<pre>";
// print_r($arr);
// array_pop(array):-it remove last element of array.
// array_pop($arr);
// print_r($arr);
// array_unshift(array,element):-It insert element begining of
//  array.
// array_unshift($arr,7);
// print_r($arr);
// array_shift(array):-it remove first element of array.
// array_shift($arr);
// print_r($arr);
// array_merge(array1,array2):-It merge two or more array and 
// create a new array.It return new array.
// $a = [1,2,3,5];
// $b = [4,5,7,7];
// $c = array_merge($a,$b);
// print_r($c);
// $a = 1;
// $b = 2;
// $c = "vishal";
// print_r(compact('a','b','c'));
// $arr = [10,3,6,1,1,1];
// sort($arr);//it sort array into ascending order.
// print_r($arr);
// rsort($arr);//it sort array into descending order.
// print_r($arr);
// print_r(range(0,'z'));
// array_combine(array(key),array(value));
// $key = range('a','f');
// $value = range(0,5);
// $arr = array_combine($key,$value);
// print_r($arr);
$animal = ["Dog","Cat","Dog","Zebra","Cow"];
print_r(array_search("Dog",$animal));
// echo $animal[4];
