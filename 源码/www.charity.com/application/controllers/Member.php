<?php

/**
 * 官网首页
 *
 * @author: monyyip
 * @since : 2016/06/05 16:43
 */

class MemberController extends BaseController {
    private $_pageSize = 8;
    public function indexAction() {
        $memberInfo = MemberModel::getInstance()->getInfo(M_ID);
        // 捐赠箱
        $where = array(
            'c_type' => 1,
            'c_mid' => M_ID,
            'c_status' => 1,
        );

        $box = ContributeModel::getInstance()->getList($where, array('limit' => 6));
        // 物质
        $where = array(
            'c_type' => 2,
            'c_mid' => M_ID,
            'c_status' => 1,
        );

        $thing = ContributeModel::getInstance()->getList($where, array('limit' => 6));
        // 善筹
        $where = array(
            'c_type' => 3,
            'c_mid' => M_ID,
            'c_status' => 1,
        );

        $fund = ContributeModel::getInstance()->getList($where, array('limit' => 6));
        $this->getView()->assign(array(
            'memberInfo' => $memberInfo,
            'box' => $box ? $box : array(),
            'boxCount' => $box ? count($box) : 0,
            'thingCount' => $thing ? count($thing) : 0,
            'fundCount' => $fund ? count($fund) : 0,
            'thing' => $thing ? $thing : array(),
            'fund' => $fund ? $fund : array()
        ));
    }

    public function moreAction(){
        $t = isset($_GET['t']) ? intval($_GET['t']) : 1;
        $type = isset($_GET['type']) ? Helper_Filter::format($_GET['type'], FALSE, TRUE) : '';
        // 善筹
        $where = array(
            'c_type' => $t,
            'c_mid' => M_ID,
            'c_status' => 1,
        );

        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $pagination = array('page' => $page, 'pagesize' => $this->_pageSize);
        $data = ContributeModel::getInstance()->getList($where, $pagination);
        $count = ContributeModel::getInstance()->countData($where);
        if($type == 'load'){
            if(empty($data)) return FALSE;
            $this->getView()->assign('data', $data);
            $this->getView()->display('/member/load.html');
            die;
        }

        $this->getView()->assign(array(
            't' => $t,
            'count' => $count,
            'data' => $data,
            'pageSize' => $this->_pageSize
        ));

    }

    public function logoutAction(){
        Yaf_Session::getInstance()->del('userInfo');
        $this->redirect('/');
    }
}