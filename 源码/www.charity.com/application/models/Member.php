<?php

/**
 * 管理员
 *
 * @author: moxiaobai
 * @since : 2016/1/29 10:36
 */

class MemberModel extends BaseModel {
    public function __construct()
    {
        parent::__construct('charity', 't_member', 'm_id');
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

    public function addShare($mid){
        return $this->_db->update($this->_table)->set('m_share', 1, TRUE)->where('m_id', $mid)->execute();
    }
	
	public function addPublish($mid){
        return $this->_db->update($this->_table)->set('m_publish', 1, TRUE)->where('m_id', $mid)->execute();
    }

    public function bindMember($data){
        $openId    = $data['openid'];
        $nickname  = $data['nickname'];
        $avatar    = $data['headimgurl'];

        $mid = $this->_db->select('m_id')->from('t_member')->where('m_openId', $openId)->fetchValue();
        if(!$mid) {
            //写入用户表数据
            $rows = array(
                'm_phone'    => '',
                'm_password' => '',
                'm_name' => $nickname,
                'm_avatar' => $avatar,
                'm_openId'   => $openId,
                'm_addtime'  => date('Y-m-d H:i:s')
            );
            $mid = $this->_db->insert('t_member')->rows($rows)->execute();
        }

        $userInfo = array(
            'mid'      => $mid,
            'nickname' => $nickname,
            'openId'   => $openId,
            'avatar'   => $avatar
        );

        Yaf_Session::getInstance()->set('userInfo', $userInfo);
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

    public function mergeData($data = array(), $key = 'm_id'){
        if ( ! is_array( $data ) )
            return $data;

        $ids = Helper_Array::setIds($data, $key, TRUE);
        if ( ! $ids) {return $data;}

        // 产品信息
        $info = $this->_db->select('*')->from($this->_table)->where("m_id IN({$ids})")->fetchAll();
        if ( $info === FALSE ) {return $data;}

        $info = Helper_Array::setIdsKey($info, 'm_id');
        foreach ( $data AS $k => &$row ) {
            if(isset($info[ $row[$key] ])){
                $row['m_name']      = $info[ $row[$key] ]['m_name'];
                $row['m_avatar']      = $info[ $row[$key] ]['m_avatar'];
            }else{
                unset($data[$k]);
//                $row['m_name']      = 'system';
//                $row['m_avatar']      = 'default';
            }

        }

        return $data;
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
        return $this;
    }

}