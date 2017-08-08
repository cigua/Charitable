<?php

/**
 * MongoDB操作类
 *
 * @author: moxiaobai
 * @since : 2016-03-15
 */

class Db_MongoDB {

	private $_manager;
	private $_database;
    private $_collection = null;
	static  $_instances = array();

	/**
	 * 单例模式
	 * @param $database
	 * @return Db_MongoDB
	 * @throws Exception
	 */
	public static function get($database) {
		$env    = APP_ENV;
		$config = Yaconf::get("mongodb.{$env}");
		if(!isset($config[$database])) {
			throw new Exception('Missing Mongodb Config');
		}

		if ( ! isset(self::$_instances[$database]) ) {
			$row      = $config[$database];
			$instance = new Db_MongoDB( $row['host'], $row['port'],  $row['user'], $row['password'], $row['database'] );
			self::$_instances[$database] = $instance;
			return $instance;
		}
		return self::$_instances[$database];
	}


	/**
	 * 构造函数 选择数据库
	 */
	public function __construct($hostname, $port, $username, $password, $database) {
		$this->_manager   = new MongoDB\Driver\Manager("mongodb://{$username}:{$password}@{$hostname}:{$port}");
		$this->_database  = $database;
	}

    /**
     * @return null
     * @throws Exception
     */
    public function getCollection() {
        if(!$this->_collection) {
            throw new Exception('You must set collection');
        }

        return $this->_collection;
    }

    /**
     * 设置Collection
     *
     * @param $collection
     */
    public function setCollection($collection) {
        $this->_collection = $collection;
    }

	/**
	 * 插入数据
	 *
	 * @param $data         数据
	 * @return bool
	 */
	public function insert($data) {
		$bulk = new MongoDB\Driver\BulkWrite();
        $bulk->insert($data);

        return $this->executeBulkWrite($bulk, 'insert');
	}

    /**
     * 更新数据
     *
     * @param $where
     * @param $data
     * @param bool $multi
     * @param bool $upsert
     * @return bool
     */
    public function update($where,$data,$multi=FALSE, $upsert=FALSE) {
		$bulk = new MongoDB\Driver\BulkWrite();

		$set    = array('$set'=>$data);
		$option = array('multi'=>$multi, 'upsert'=>$upsert);
		$bulk->update($where, $set, $option);

        return $this->executeBulkWrite($bulk, 'update');
	}

    /**
     * 删除数据
     *
     * @param $collection
     * @param $where       条件
     * @param int $limit   一次删除一条，0表示匹配都删除
     * @return bool
     */
    public function remove($where, $limit=1) {
		$bulk = new MongoDB\Driver\BulkWrite();

		$limit = array('limit'=>$limit);
		$bulk->delete($where, $limit);

        return $this->executeBulkWrite($bulk, 'remove');
	}

    /**
     * 执行命令行命令
     *
     * @param $command
     * @return mixed
     */
    public function executeCommand($command) {
        $commandObj = new MongoDB\Driver\Command($command);
        $cursor = $this->_manager->executeCommand("{$this->_database}", $commandObj);

        return (array)$cursor->toArray()[0];
    }

    public function count($where=array()) {

    }

    /**
     * 查询多条数据
     *
     * @param array $where
     * @param array $pagination
     * @param array $sort
     * @param array $filed
     * @return array
     */
	public function find($where=array(), $pagination=array(), $sort=array(), $filed=array('_id'=>false)) {
        if(count($filed) > 0) {
            $options['projection'] = $filed;
        }

        //分页数据
        if ( isset($pagination['page']) AND isset($pagination['pagesize']) ) {
            $options['limit'] = isset( $pagination['page'] ) ? intval($pagination['page']) : 1;
            $options['skip']  = isset( $pagination['pagesize']  ) ? intval($pagination['pagesize'])  : 10;
        } elseif ( isset($pagination['limit']) ) {
            $options['limit'] = isset( $pagination['limit'] ) ? intval($pagination['limit']) : 1;
        }

        //排序
        $options['sort'] = $sort;

        $cursor = $this->executeQuery($where, $options);
        $data = array();
        foreach($cursor as $key => $document) {
            $data[$key] = (array)$document;
        }
        return $data;
	}

    /**
     * 查询单条数据
     *
     * @param array $where   条件
     * @param array $filed   字段
     * @return bool
     * @throws Exception
     */
    public function findOne($where=array(),$filed=array('_id'=>false)) {
        $options['limit'] = 1;

        if(count($filed) > 0) {
            $options['projection'] = $filed;
        }

        $cursor = $this->executeQuery($where, $options);
        $data = array();
        foreach($cursor as $key => $document) {
            $data[$key] = (array)$document;
        }

        return (count($data) > 0) ? $data[0] : FALSE;
    }

    /**
     * 执行BulkWrite(插入，更新，删除数据)
     * @param $bulk
     * @param $type
     * @return bool
     */
    private function executeBulkWrite($bulk, $type) {
        $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);

        $collection = $this->getCollection();
        $result = $this->_manager->executeBulkWrite("{$this->_database}.$collection", $bulk, $writeConcern);

        $count = 0;
        switch($type) {
            case 'insert':
                $count = $result->getInsertedCount();
                break;
            case 'update':
                $count = $result->getModifiedCount();
                break;
            case 'remove':
                $count = $result->getDeletedCount();
                break;
        }

        return ($count != 0) ? TRUE : FALSE;
    }

    /**
     * 查询数据
     *
     * @param $where
     * @param $options
     * @return \MongoDB\Driver\Cursor
     * @throws Exception
     */
    private function executeQuery($where, $options) {
        $query          = new MongoDB\Driver\Query($where, $options);
        $collection     = $this->getCollection();
        $readPreference = new MongoDB\Driver\ReadPreference(MongoDB\Driver\ReadPreference::RP_PRIMARY);
        $cursor = $this->_manager->executeQuery("{$this->_database}.$collection", $query, $readPreference);

        return $cursor;
    }
}