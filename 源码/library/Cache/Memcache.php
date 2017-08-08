<?php

class Cache_Memcache {

    private  $_instance;
    private  $_expiration = 3600;
    private  $_project;
    
    /**
     * 实例化的Memcache对象
     * @var Memcache
     */
    public function __construct($project=null) {
        $this->_instance = new Memcache;
        
        if( ! is_null($project) ) {  
        	$this->_project = '['.$project.']';
        } else {
            $host = explode('.', $_SERVER['HTTP_HOST'] );
            if ( count($host) < 3 ) {
                $this->_project = '['.$host[0].']';
            } else {
                array_pop($host);
                array_pop($host);
                $this->_project = "[" . implode('.', $host) . "]";
            }
        }
        
        $this->addServer();
    }


    /**
     * 设置项目
     */
    public function setProject($project) {
        $this->_project = "[{$project}]";
    }
    

    /**
     * 添加服务器
     * 
     * @param array $config
     */
    private function addServer() {
        $env    = APP_ENV;
        $config = Yaconf::get("memcache.{$env}");
        if(!isset($config)) {
            throw new Exception('Missing 未找到memcache Config');
        }

        foreach ( $config AS $val ) {
            $this->_instance->addServer($val['host'], $val['port']);
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
        if ( $time == FALSE ) {
            $time = $this->_expiration;
        }
        $this->_instance->set($this->_project . $key, $value, 0, $time);
    }
    
    /**
     * 替换键值
     *
     * @param string $key
     * @param mixed $value
     * @param int $time 时间(秒)
     * @return boolean
     */
    public function replaceValue($key, $value, $time=false) {
        if ( $time == FALSE ) {
            $time = $this->_expiration;
        }
        $this->_instance->replace($this->_project . $key, $value, 0, $time);
    }
    
    /**
     * 获取值
     * 
     * @param string $key
     * @return boolean
     */
    public function getValue($key) {
        return $this->_instance->get($this->_project . $key);
    }
    
    /**
     * 删除值
     * 
     * @param string $key
     * @return boolean
     */
    public function deleteValue($key) {
        return $this->_instance->delete($this->_project . $key);
    } 
}