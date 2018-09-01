<?php
$starttime = '09:25';
$stoptime = '13:47';
$diff = (strtotime($stoptime) - strtotime($starttime));
$total = $diff/60;
echo sprintf("%02dh %02dm", floor($total/60), $total%60);

?>