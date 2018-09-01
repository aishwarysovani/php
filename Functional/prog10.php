<?php
echo"enter size of array:";
$num=readline();
echo"enter " . $num . " number";
for($i=1;$i<=$num;$i++)
{
    $a[$i]=readline();
}
for($l=1;$l<$num-2;$l++)
{
    for($m=2;$m<$num-1;$m++)
    {
        for($n=3;$n<=$num;$n++)
        {
            $sum=$a[$l]+$a[$m]+$a[$n];
            if($sum==0)
            echo"triplets found at:" . $a[$l] . $a[$m] . $a[$n];
        }
    }
}
echo"triplets not found";

?>