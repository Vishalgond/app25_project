<?php
$var = '100';
$second = '10 days';
$data = $var.$second;
$data = $var+$second;
echo $data;
echo gettype($data);
?>