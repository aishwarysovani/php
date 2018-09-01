<?php
echo"enter the vanlue for any no";
$num=readline();
echo"number  squre";
echo"\n";
if(0 < $num && $num < 31)
{
    for($i=1;$i<$num;$i++) 
    {
    $squre=$i * $i;
    echo $i . "        " . $squre;
    echo"\n";
    }
 
}
else
{
    echo"enter values in 2 to 31";
}
?>