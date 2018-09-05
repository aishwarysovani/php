<?php
include'utility.php';
echo'enter value for gambler stake: ';
$num=filternum();
echo'enter value for goal: ';
$goal=filternum();
echo'how many trial you will perfrom: ';
$trial=filternum();
$bet=0;$win=0;
for($i=0;$i<$trial;$i++)
{
    $cash=$num;
    while($cash>0 && $cash<$goal)
    {
    $bet++;
    if(rand(0,1)<0.5)
       $cash++;
    else
       $cash--;
    }
    if($cash==$goal)
      $win++;
}
$win_per=($win/$trial)*100;
$loss_per=100-$win_per;
echo"\n total win=" . $win;
echo"\n percentage of wins=" . $win_per;
echo"\n percentage of loss=" . $loss_per;
?>