<?php
include 'utility.php';
echo"enter no for limit of harmonic series:";
$num=filternum();
$har=harmonic($num);
echo $har;
?>