<?php
class Fruit{
    function mango(){
        echo "Aha mango";
    }
    function banana(){
        echo "This is kela";
    }
    function apple(){
        echo "This is apple";
    }
}

$fruit = new Fruit;
$fruit->mango();
$fruit->banana();
$fruit->apple();
?>