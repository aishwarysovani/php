<?php
include'utility.php';
class StopWatch {
  
  public static $startTimes = array();

  public static function start($timerName = 'default') {
    self::$startTimes[$timerName] = microtime(true);
  }

  public static function elapsed($timerName = 'default') {
    return microtime(true) - self::$startTimes[$timerName];
  }
  

}
  echo"start time \n ";
  StopWatch::start();
  echo'enter 1 stop time'; 
  $num=filternum();
  $flag=false;
  do{
  if($num == 1)
  {
  sleep(0);
  echo "Elapsed time: " . StopWatch::elapsed() . " seconds";
  $flag=true;
  }
  elseif($num < 1)
  {
    echo"enter only 1 to stop";
    $num=filternum();
  }
  else
  {
    echo"enter only 1 to stop";
    $num=filternum();
  }
}while($flag==false);
  

?>