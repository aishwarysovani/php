<?php
include 'utility.php';
echo"enter value for total coin tossed:";
$num=filternum();                            //check input is number or not
$num=positive($num);                         //for checking inputed number is positive or not
$n=tossed($num);   
echo'percentage of head occarance:' . $head_per . "\n";
echo'percentage of tail occarance:' . $tail_per . "\n";                         
?>
