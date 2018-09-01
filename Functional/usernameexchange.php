<?php
include 'utility.php';

echo"enter your user name ";
$name=getstring();
echo str_replace("username",$name,"hello username, how are you?");
?>