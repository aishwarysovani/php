<?php
include'utility.php';
echo'enter number for row';
$row=filternum();
echo'enter number for column';
$col=filternum();
echo"1.integer number \n 2.double number \n 3.boolean number \n";
echo"enter your choice:";
$c=filternum();

switch($c)
{
case 1 :echo'enter number for integer ';
        read($row,$col);
        break;
case 2 :echo'enter number for float or double ';
        read1($row,$col);
        break;
case 3:echo'enter number for boolean ';
       read2($row,$col);
       break;
default:echo"You are not select for integer,double and boolean";
}
?>