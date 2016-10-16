<?php
$a = 0;
$b = 1;

$c = 1;

//A + (B | C)

$eval = "if ($a and ($b or $c)){ echo 'hello world\n'; } else { echo 'boo!\n'; } ";
eval($eval);
//var_dump($eval);
//if ($a xor $b)
//{
//    echo "hooray\n";
//}
//
//if ($a ^ $b)
//{
//    echo "hoorah!!!\n";
//}