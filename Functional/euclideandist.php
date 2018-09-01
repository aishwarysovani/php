<?php
function distance()
{
    $x1=0;$y1=0;
    echo"enter value for x2 and y2";
    $x2=readline();
    $y2=readline();
    if($x2<0 || $y2<0)
    {
        echo"enter positive values";
    }
    else{
        $e=(($x2-$x1)*($x2-$x1)+($y2-$y1)*($y2-$y1));
        echo("Eucludean distance=" . sqrt($e));
    }
}
distance();
?>