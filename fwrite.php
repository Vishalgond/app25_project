<?php
$res = fopen("demo.txt",'w');
$data = "fwrite function used to create a file and 
write some text inside created file.";
echo fwrite($res,$data);
fclose($res);
?>