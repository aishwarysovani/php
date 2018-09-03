<?php
include 'utility.php';
echo"enter value for total coin tossed:";
$num=filternum();                            //check input is number or not
$num=positive($num);                         //for checking inputed number is positive or not
$n=tossed($num);                             //to calculate greter percentage head or tail
if($n=='1')
    {
    echo"percentage of head  is greater";
    }
else{
    echo"percentage of tail is greater";
    }
?>
