<?php
$data = file_get_contents("data.csv");
$readdata = explode(',',$data);
for($i=0;$i<=10;$i++){
    $newdata[] =$readdata[$i]; 
}
// print_r($newdata);
file_put_contents("new.csv",implode(',',$newdata));

