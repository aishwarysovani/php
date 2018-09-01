<?php
echo"enter value for total coin tossed:";
$no=readline();
echo"how many time head will tossed:";
$head=readline();
echo"how many times tail will tossed:";
$tail=readline();
if($no<0 || $head<0 || $tail<0)
{
    echo"enter positive number";
}
else{
$head_per=( $head / $no ) * 100;
$tail_per=( $tail / $no ) * 100;
if($head_per > $tail_per){
    echo"percentage of head " . $head_per .  "% is greater";
}
else{
    echo"percentage of tail " . $tail_per .  "% is greater";
}
}
?>
