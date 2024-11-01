<?php namespace RebootPHP;






class Loggerware {



		function create_log_file($fname) {

      if(!file_exists($fname)) {
        file_put_contents($fname, '');
      } 

      $ip = $_SERVER['REMOTE_ADDR'];
      $time = date('d/m/y h:iA', time());

      $log = file_get_contents($fname);
      $line = '$ip\t$time\t$log\r';

      file_put_contents($fname, $line);
    } 


} 
