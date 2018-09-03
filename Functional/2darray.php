<?php
include'utility.php';
echo'enter number for row';
$row=filternum();
echo'enter number for column';
$col=filternum();
$num=read($row,$col);


?>