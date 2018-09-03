<?php
include'utility.php';
echo'enter start time and end time for calculate elapsed time:';
$starttime=filternum();
$stoptime=filternum();
$diff = (strtotime($stoptime) - strtotime($starttime));
$total = $diff/60;
echo sprintf("%02dh %02dm", floor($total/60), $total%60);

?>