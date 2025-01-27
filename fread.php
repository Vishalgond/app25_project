<?php
$data= fopen("test.txt","r");
// echo fread($data,filesize('test.txt'))."<br>";
// echo fgets($data);
while(!feof($data)){
    echo fgets($data);
}

fclose($data);
?>