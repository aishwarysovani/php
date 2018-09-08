<?php
include 'utility.php';
echo"enter no for limit of harmonic series:";
$num=filternum();
$num=positive($num);
$har=harmonic($num);
echo "\n harmonic value=" . $har;
?>