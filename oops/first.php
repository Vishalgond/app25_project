<?php
class ClassName{
    public $name = "Vishal";//Property
    function demo(){
        $name1="Hello";
        return $name1;
    }
}
$obj = new ClassName;//Object
// $abc = new ClassName;
echo $obj->name;
// echo $abc->name;
echo $obj->demo();

?>