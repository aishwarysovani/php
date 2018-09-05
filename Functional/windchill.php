<?php
include'utility.php';
echo"enter values for temparature in float:";
$t=filterfloat();
echo"enter value for speed in float:";
$v=filterfloat();
$w=35.74 + 0.6215* $t + (0.4275*$t - 35.75) * pow($v, 0.16);
echo"\n tempareture=" . $t;
echo"\n wind speed=" . $v;
echo"\n wind chill=" . $w;
?>