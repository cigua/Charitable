<?php

class Cache_Redis {
	
    /**
     * 实例化的Redis对象
     * @var Redis
     */
    private  $_instance;
    private  $_expiration = 3600;
    private  $_project;
    
    public function __construct($project=null) {
        $this->_instance = new Redis;
        
        if(! is_null($project)) {  
        	$this->_project = '['.$project.']';
        }else{
            $host = explode('.',$_SERVER['HTTP_HOST']);
            $this->_project = '['.$host[0].']';
        }
        
        $this->addServer();
    }
    
    /**
     * 添加服务器
     * 
     * @param array $config
     */
    private function addServer() {
        $config   = new Yaf_Config_Ini(APP_PATH . "/config/redis.ini",APP_ENV);
        $config   = $config->toArray();
        if(!empty($config)) {
            $config = $config['one'];
            $this->_instance->connect($config['host'],$config['port']);  
        } else {
        	exit('redis:未找到redis.ini配置.');
        }
    }
    
    /**
     * 设置值
     * 
     * @param string $key
     * @param mixed $value
     * @param int $time 时间(秒)
     * @return boolean
     */
    public function setValue($key, $value, $time=false) {
        $this->_instance->set($key, $value);
        if($time!==false){
             $this->_instance->expire($key,$time);
        }
    }
    
    /**
     * 获取值
     * 
     * @param string $key
     * @return boolean
     */
    public function getValue($key) {
        if(isset($_GET['CACHE'])){
            return false;
        }
		if(isset($_COOKIE['CACHE']) && $_COOKIE['CACHE']=='17611'){
            return false;
        }
        return $this->_instance->get($key);
    }
    
    /**
     * 删除值
     * 
     * @param string $key or $arraykey
     * @return boolean
     */
    public function deleteValue($key) {
        return $this->_instance->del($key);
    }

	/**
     * 自动累加
     * 
     * @param string $key
	 * @param int 累加值
     * @return boolean
     */
	public function autoIncr($key,$num=1){
		if($num==1){
			return $this->_instance->incr($key);
		}else{
			return $this->_instance->incrBy($key,$num);
		}
	}

	/**
     * 自动递减
     * 
     * @param string $key
	 * @param int 累加值
     * @return boolean
     */
	public function autoDecr($key,$num=1){
		if($num==1){
			return $this->_instance->decr($key);
		}else{
			return $this->_instance->decrBy($key,$num);
		}
	}

	/**
     * 一次返回多个key
     * 
     * @param array $keyarr
     */
	public function mget($keyarr){
		$result = $this->_instance->mget($keyarr);
		$data   = array();
		foreach($keyarr as $key => $val){
			$data[$val] = $result[$key];
		}
		return $data;
	}

	/**
     * 一次返回多个key
     * 
     * @param array $keyarr
     */
	public function mset($keyarr){
		return $this->_instance->mset($keyarr);
	}

    /** 
     * 将整个对象提供出去使用更多原生方法
     */
    public function instance(){
        return $this->_instance;
    }
}