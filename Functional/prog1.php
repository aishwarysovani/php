<?php
echo"enter user name:";
$name=readline();
if (!preg_match("/^[A-Za-z\\- \']+$/",$name)) {
    echo "Invalid user name";
  }
  else {
    echo "Valid";
    echo"\n";
    echo"hello " . $name . ",How are you?";
  }

?>