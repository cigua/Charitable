<?php

/**
 * 管理员
 *
 * @author: moxiaobai
 * @since : 2016/1/29 10:36
 */

class CompanyModel extends BaseModel {

    const AUTH_KEY = 'M@x^@!e@($';

    public function __construct()
    {
        parent::__construct('charity', 't_company', 'c_id');
    }


    /**
     * 是否存在用户
     *
     * @param $username
     * @return mixed
     */
    private function isExistData($where) {
        return $this->_setWhereSQL($where)->_db->select($this->_primary_key)->from($this->_table)->fetchValue();
    }

    /**
     * 设置密码
     *
     * @param $password
     * @return string
     */
    private function setMd5Password($password) {
        return md5(CompanyModel::AUTH_KEY . $password);
    }

    /**
     * 获取列表
     *
     * @param array $where
     * @param array $pagination
     * @return bool
     */
    public function getList($where=array(), $pagination=array()) {
        $data = $this->_setWhereSQL($where)
                    ->_setPaginationSQL($pagination)
                    ->_db->select('*')
                    ->from($this->_table)
                    ->order($this->_primary_key, 'DESC')
                    ->fetchAll();

        if ( $data === FALSE ) return FALSE;
        return $data;
    }

    /**
     * 统计数量
     *
     * @param array $where
     */
    public function countData($where=array()) {
        return $this->_setWhereSQL($where)->_db->select('COUNT(*)')->from($this->_table)->fetchValue();
    }


    /**
     * @param $id
     */
    public function getInfo($id) {
        return $this->_db->select('*')->from($this->_table)->where($this->_primary_key, $id)->fetchOne();
    }

    /**
     * 获得可以使用的机构列表
     */
    public function getCompanyOption(){
        $result = array();
        $data = $this->_db->select('*')->from($this->_table)->fetchAll();
        if($data){
            foreach($data as $val){
                $result[$val['c_id']] = $val['c_name'];
            }
        }

        return $result;
    }

    /**
     * 保存数据
     *
     * @param array $data
     * @param int   $id
     * @return mixed
     */
    public function saveData($data, $id=0) {
        $data['c_password'] = $this->setMd5Password($data['c_password']);

        if($id > 0){
            return $this->_db->update($this->_table)->rows($data)->where($this->_primary_key, $id)->execute();
        }else{
            return $this->_db->insert($this->_table)->rows($data)->execute();
        }
    }

    public function mergeData($data = array(), $key = 'c_id'){
        if ( ! is_array( $data ) )
            return $data;

        $ids = Helper_Array::setIds($data, $key, TRUE);
        if ( ! $ids) {return $data;}

        // 产品信息
        $info = $this->_db->select('c_id,c_name')->from($this->_table)->where("c_id IN({$ids})")->fetchAll();
        if ( $info === FALSE ) {return $data;}

        $info = Helper_Array::setIdsKey($info, 'c_id');
        foreach ( $data AS $k => &$row ) {
            if(isset($info[ $row[$key] ])){
                $row['c_name']      = $info[ $row[$key] ]['c_name'];
            }else{
                unset($data[$k]);
            }

        }

        return $data;
    }

    /**
     * 改变状态
     *
     * @param $id
     * @param array $data 修改数据
     * @return mixed
     */
    public function changeData($id, $data) {
        return $this->_db->update($this->_table)->rows($data)->where($this->_primary_key, $id)->execute();
    }

    /**
     * 修改密码
     *
     * @param $id
     * @param $password
     * @return mixed
     */
    public function editPassword($id, $password) {
        $password = $this->setMd5Password($password);
        return $this->_db->update($this->_table)->set('c_password', $password)->where($this->_primary_key, $id)->execute();
    }


    /**
     * SQL分页查询
     */
    private function _setPaginationSQL( $pagination = array() ) {
        if ( isset($pagination['page']) AND isset($pagination['pagesize']) ) {
            $page      = isset( $pagination['page'] ) ? intval($pagination['page']) : 1;
            $pagesize  = isset( $pagination['pagesize']  ) ? intval($pagination['pagesize'])  : 10;
            $this->_db->page($page, $pagesize);
        } elseif ( isset($pagination['limit']) ) {
            $this->_db->limit( intval($pagination['limit']) );
        }
        return $this;
    }

    /**
     * SQL Where条件
     * @param array $where
     * @return $this
     */
    private function _setWhereSQL ($where = array()) {
        if(A_ROLE >0){
            $this->_db->where("c_id", A_ROLE);
        }

        if (isset($where['username']) AND $where['username']) {
            $this->_db->where("c_name like '%{$where['username']}%'");
        }

        if (isset($where['accound']) AND $where['accound']) {
            $this->_db->where("c_accound" ,$where['accound']);
        }

        if (isset($where['password']) AND $where['password']) {
            $this->_db->where("c_password", $where['password']);
        }
        if (isset($where['prov']) AND $where['prov']) {
            $this->_db->where("c_prov like '%{$where['prov']}%'");
        }
        if (isset($where['city']) AND $where['city']) {
            $this->_db->where("c_city like '%{$where['city']}%'");
        }


        return $this;
    }

    /**
     * 是否存在用户
     *
     * @param $where
     * @return mixed
     */
    private function isTrueData($where) {
        return $this->_setWhereSQL($where)->_db->select($this->_primary_key)->from($this->_table)->where('c_check_status',1)->fetchValue();
    }

    /**
     * 机构登陆
     *
     * @param $username
     * @param $password
     * @return mixed
     */
    public function login($username, $password) {
        if(Helper_Check::isEmptyString($username)) {
            return $this->result(105, '机构名不能为空');
        }

        if(Helper_Check::isEmptyString($password)) {
            return $this->result(106, '机构密码不能为空');
        }

        //机构是否存在

        if(! $this->isTrueData(array('c_accound'=>$username))) {
            return $this->result(107, '机构名未认证,暂时无法登陆');
        }

        $password = $this->setMd5Password($password);

        $where    = array('accound'=>$username, 'password'=>$password);

        $rows     = $this->_setWhereSQL($where)
            ->_db->select('c_id,c_name')
            ->from($this->_table)
            ->where('c_status', 1)
            ->where('c_check_status', 1)
            ->fetchOne();

        if(!$rows) {
            return $this->result(108, '密码错误或未认证');
        } else {
            Yaf_Session::getInstance()->set('userInfo', $rows);
            return $this->result(1, '登录成功');
        }
    }

}