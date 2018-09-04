<?php
include 'utility.php';
echo'enter any no to find factorial';
$n=filternum();
$num=fact($n);
echo 'factorial by recursive function:' . $num;
echo"\n";
$num1=fact1($n);
echo 'factorial by itrative function:' . $num1;
if($num==$num1)
{
    echo"\n both give equal result";
}
else{
    echo"\n both give differnt result";
}
?>