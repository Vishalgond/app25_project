<?php
$i=11;
do{
    echo "Hello world<br>";
    $i=$i++ + ++$i;
}while($i>=10 && $i<20);

?>