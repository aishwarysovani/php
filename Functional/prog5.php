<?php
function harmonic()
{
    echo"enter no for limit of harmonic series:";
    $num=readline();
    while(1<$num)
    {
        $har=($num)/((1/$num)+(1/$num-1));
        $num--;
    }
    echo$har;
}
harmonic();

?>