<?php
$res = fopen("topi.jpg",'r');
$photo = fread($res,filesize("topi.jpg"));
$dest = fopen("cap.jpg",'w');
fwrite($dest,$photo);
fclose($dest);
fclose($res);
?>