<?php
include 'utility.php';
echo'enter number to find prime factor:';
$num=filternum();
$num=positive($num);
primefact($num);

?>