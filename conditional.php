<?php
$a = 10;
if($a++==10 && ++$a != 12):
    echo "Buddhi gayab";
    echo "How is possible";
elseif(--$a + $a++ == 24):
    echo $a."<br>";
    echo "it is possible";
elseif($a - $a++ + --$a == 25 ):
    echo "Kuchh nhi aa rha h";
else:
    echo $a;    
endif;
?>