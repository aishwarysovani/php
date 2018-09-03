<?php
include 'utility.php';

echo"enter your user name ";
$name=getstring();                            //check input is string or number
echo str_replace("username",$name,"hello username, how are you?");
?>