<?php

/**
 * 现金表
 *
 * @author: moxiaobai
 * @since : 2016/1/29 10:36
 */

class CashsModel extends BaseModel
{

    public function __construct()
    {
        parent::__construct('charity', 't_cashs', 'ca_id');
    }

    /**
     * 整合信息
     *
     * @param $data
     * @param $key 合并id
     * @param $type 类型id
     * @return mixed
     */
    public function mergData($data, $key = 'ca_mid',$type='')
    {
        if (!is_array($data))
            return $data;

        $ids = Helper_Array::setIds($data, $key, TRUE);
        if (!$ids) {
            return $data;
        }

        //订单信息
        $info = $this->_db
            ->select('ca_mid', 'ca_type', 'ca_total', 'ca_used', 'ca_left')
            ->from($this->_table)
            ->where("ca_mid IN({$ids})")
            ->where("ca_type",$type)
            ->fetchAll();

        if ($info === FALSE) {
            return $data;
        }

        $info = Helper_Array::setIdsKey($info, 'ca_mid');

        foreach ($data AS &$row) {
            $row['ca_mid'] = isset($info[$row[$key]]) ? $info[$row[$key]]['ca_mid'] : '';
            $row['ca_type'] = isset($info[$row[$key]]) ? $info[$row[$key]]['ca_type'] : '';
            $row['ca_total'] = isset($info[$row[$key]]) ? $info[$row[$key]]['ca_total'] : '';
            $row['ca_used'] = isset($info[$row[$key]]) ? $info[$row[$key]]['ca_used'] : '';
            $row['ca_left'] = isset($info[$row[$key]]) ? $info[$row[$key]]['ca_left'] : '';
        }
        return $data;
    }

	public function getInfo($where = array()){
		return $this->_setWhereSQL($where)->_db->select('*')->from($this->_table)->fetchOne();
	}
	
    /**
     * SQL Where条件
     * @param array $where
     * @return $this
     */
    private function _setWhereSQL ($where = array()) {

        if (isset($where['ca_type']) AND $where['ca_type']) {
            $this->_db->where("ca_type" ,$where['ca_type']);
        }

        if (isset($where['ca_mid']) AND $where['ca_mid']) {
            $this->_db->where("ca_mid" ,$where['ca_mid']);
        }


        return $this;
    }

    /**
     * 查找资金账户
     */
    public function isTrueName($where){
        return $this->_setWhereSQL($where)->_db->select('*')->from($this->_table)->fetchOne();
    }

    /**
     * 保存数据
     *
     * @param array $data
     * @param int   $id
     * @return mixed
     */
    public function saveData($data, $id=0) {
        if($id > 0){
            return $this->_db->update($this->_table)->rows($data)->where($this->_primary_key, $id)->execute();
        }else{
            return $this->_db->insert($this->_table)->rows($data)->execute();
        }
    }
}
