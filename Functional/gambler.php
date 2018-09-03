<?php
include'utility.php';
echo'enter number for gambler stake:';
$num=filternum();
$n=tossed($num);
if($n=='1')
    {
    echo"percentage of wins  is greater";
    }
else{
    echo"percentage of loss is greater";
    }
$win=$head;
$win_per=$head_per;
$loss_per=$tail_per;
echo"\n total win=" . $win;
echo"\n percentage of wins=" . $win_per;
echo"\n percentage of loss=" . $loss_per;
?>