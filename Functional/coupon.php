<?php
include'utility.php';
echo'enter any number for coupon:';
$num=filternum();
$count=random($num);
echo'total count of random number for distinct number=' . $count;

?>