<?php
// $str = " Hi this";
// $str1 =" is ram ";
// $string = trim($str1);
// echo strlen($string);
// echo $str.trim($str1)."<br/>";
// echo strlen(trim($str1))."<br>";//It returns length of string.
// trim($str);
// echo strlen($str);

//ltrim:it remove left side whitespace and return the modified string.
//rtrim:it remove right side whitespace and return the modified string.
// echo $str;
// str_repeat(string,time):it repeat string for given time 
// and return repeated string.
// echo str_repeat('Hey',10);
// for($i=0;$i<=10;$i++){
//     echo "Hey";
// }
// str_replace(replaced string,replace by string,string):-It replace string by given string.
// $string = "Hello world";
// echo str_replace("Hello world","Ram",$string);
// explode(separator,string):-It convert string into array 
// format by delimeter and it return array.
// $str = "It is explode function, for string to array conversion";
// $arr = explode(" ",$str);
// print_r($arr);
// echo $arr[1];
// implode(string delimeter,array):-It convert array into string format by given
// delemeter and it return a string.
// $arr = ["It","is","imlode","function","for","array","to","string","conversion"];
// echo implode(" ",$arr);
// str_split(string):-it convert string into array format and it returns array;
// $var = "Om Prakash";
// // echo $var[1];
// // print_r(str_split($var));
// for($i=0;$i< strlen($var);$i++){
//     $arr[] = $var[$i];
// }
// print_r($arr);
// str_word_count(string):-it return word count of given string.
// echo str_word_count("Hello world,hey?oh.oho");\
// strrev(string):-it returns reverse string.
// echo strrev("Hello world");
// echo "Hello ".strrev('world');
// $str = explode(" ","Hello world");
// echo $str[0]." ".strrev($str[1]);
// $str = "Hello woRld";
// lcfirst(string):-it convert first letter in lowercase of string. 
// it return lowercase string.
// echo lcfirst($str);
// ucfirst(string):-it convert first letter in uppercase of string. 
// it return uppercase string
// echo ucfirst($str);
// ucwords(string):-it convert lower to upper case first letter of each word of string. 
// echo ucwords($str);
// strtoupper(string):-it convet string lower to upper case.
// echo strtoupper($str);
// strtolower(string):-it convet string upper to lower case.
// echo strtolower($str);
// echo chop($str,'d');
$str = "Hello world";
$str1 = "Hello world1";
// echo substr($str,1,3);
// echo strpos($str,"d");
// echo strcmp($str,$str1);
if($str === $str1){
    echo 0;
}else{
    echo 1;
}
