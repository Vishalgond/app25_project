<?php
$i=11;
do{
    echo $i;
    $i=$i++ + ++$i;
}while($i>=10 && $i<30);

?>