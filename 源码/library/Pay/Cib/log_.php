<?php

class Log_
{
	// 打印log
	function  log_result($file,$word) 
	{
	    $fp = fopen($file,"a");
	    flock($fp, LOCK_EX) ;
	    fwrite($fp, strftime("%Y-%m-%d %H:%M:%S",time())." ".$word."\n");
	    flock($fp, LOCK_UN);
	    fclose($fp);
	}
}

?>