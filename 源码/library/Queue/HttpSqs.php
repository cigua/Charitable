<?php

/**
 * Queue_HttpSqs
 *
 * @category Queue
 * @package  Queue_HttpSqs
 * @author   moxiaobai
 * @since    2016-01-26
 */
class Queue_HttpSqs{

	/**
	 * 对象单例
	 */
	private $_host;
	private $_auth;
	private $_charset;

	public function __construct()
	{
		$env    = APP_ENV;
		$config = Yaconf::get("httpsqs.{$env}");
		if (!isset($config['httpsqs']) ) {
			exit('Error: Httpsqs server not found!');
		}

		$this->_host    = $config['httpsqs']['host'];
		$this->_auth    = $config['httpsqs']['auth'];
		$this->_charset = $config['httpsqs']['charset'];
	}

	/**
	 * 写入数据
	 *
	 * @param $queue_name   队列名称
	 * @param $queue_data   写入数据，数组array('uid'=>13392, 'name'=>'moxiaobai');
	 * @return bool
	 */
	public function put($queue_name, $queue_data)
	{
		$queue_data = json_encode($queue_data);
		$result = $this->curl('put', "&name=".$queue_name."&opt=put&data=" . $queue_data);

		if ($result == "HTTPSQS_PUT_OK") {
			return true;
		} else if ($result == "HTTPSQS_PUT_END") {
			return false;
		}

	}

	/**
	 * 读数据
	 *
	 * @param $queue_name   队列名称
	 * @return bool|mixed
	 */
	public function get($queue_name) {
		$result = $this->curl("get", "&name=". $queue_name);
		if ($result == "HTTPSQS_GET_END") {
			return false;
		} else {
			return json_decode($result, true);
		}
	}

	private  function  curl($action, $query)
	{
		$url = $this->_host . "/?opt={$action}&auth=". $this->_auth."&charset=".$this->_charset . $query;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$ret = curl_exec($ch);
		curl_close($ch);

		return $ret;
	}
}