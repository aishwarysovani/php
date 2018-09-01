<?php
echo"enter any year to check leap year:";
$year=readline();
if($year%400==0 || $year%100!=0 & $year%4==0)
{
    echo"year is leap year";
}
else
echo"year is not leap year";
?>