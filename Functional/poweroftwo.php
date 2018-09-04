<?php
include 'utility.php';

echo"enter the vanlue for any number";
cal();
function cal()
{
$num=filternum(); 
$num=positive($num);                                    //check input is string or number
power($num);                                          //calculate power of numbers
}
?>