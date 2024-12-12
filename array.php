<?php
$name = ["vishal","adarsh","rajiv"];
$age = ["adarsh"=>20,"vishal"=>24,"rajiv"=>22];
// print_r($name[1]);
// print_r($age["adarsh"]);
foreach($name as $val){
    echo $val."<br>";
}
foreach($age as $key=>$val){
    echo $key." ka age =".$val."<br>";
}
?>