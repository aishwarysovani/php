<?php

class StopWatch {
  
  private static $startTimes = array();

  public static function start($timerName = 'default') {
    self::$startTimes[$timerName] = microtime(true);
  }

  public static function elapsed($timerName = 'default') {
    return microtime(true) - self::$startTimes[$timerName];
  }
}

  echo"start time \n ";
  StopWatch::start();
  echo'enter for stop time'; 
  sleep(2);
  echo "Elapsed time: " . StopWatch::elapsed() . " seconds";
?>