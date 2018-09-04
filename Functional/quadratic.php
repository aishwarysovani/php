<?php
include'utility.php';
echo'enter values for a,b and c of equation to find roots:';
$a=filternum();
$b=filternum();
$c=filternum();
root($a,$b,$c);
echo'delta=' . $delta . "\n";
echo'root 1=' . $r1 . "\n";
echo'root 2=' . $r2 . "\n";

?>