<?php

include ('phprpc_client.php'); 

class Rpc_Api {

	private static $_instances = array();
	
	static function getInstance($source = 'rtx') {
		$env    = APP_ENV;
		$config = Yaconf::get("rpc.{$env}");

		if(!isset($config['rpc'][$source])) {
			throw new Exception('Missing Config Item');
		}

		if ( ! isset(self::$_instances[$source]) ) {
			$instance = new PHPRPC_Client($config['rpc'][$source]['host']);

			self::$_instances[$source] = $instance;
			return $instance;
		}
		return self::$_instances[$source];
	}
}