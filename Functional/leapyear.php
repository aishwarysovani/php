<?php
include 'utility.php';
echo "enter any year to check leap year:";
$year=filternum();                           //to check year in number format or not
leap($year);                                 //check year is leap or not
?>