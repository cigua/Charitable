<?php

/**
 * 前台用户
 *
 * @author: moxiaobai
 * @since : 2016/2/1 17:19
 */

class MemberController extends BaseController
{

    //初始化
    private function init()
    {
        $this->isAjaxRequest();
        $this->isLogin();
        Yaf_Dispatcher::getInstance()->disableView();
    }

    //更改状态
    public function statusAction($id, $status) {
        $id = intval($id);
        if( empty($id) ) {
            Helper_Json::formJson('缺失参数');
        }

        $status  = ($status == 1) ? 2: 1;
        $data     = array('m_status'=>$status);
        $result   = memberModel::getInstance()->changeData($id,$data);
        if($result) {
            Helper_Json::formJson('操作成功', 'y');
        } else {
            Helper_Json::formJson('操作失败');
        }
    }

    //新增保存数据
    public function saveAction() {
        $id  = intval( $_POST['id'] );

        // 基本数据过滤
        $data  = $this->getRequest()->getPost();

        unset($data['id']);
        if($id > 0) {
            $result = ContributeModel::getInstance()->saveData($data, $id);
        } else {
            $data['c_addtime'] = date('Y-m-d H:i:s');
            $data['c_status']  = 1;
            $result = ContributeModel::getInstance()->saveData($data);
        }

        if($result) {
            Helper_Json::formJson('操作成功', 'y');
        } else {
            Helper_Json::formJson('操作失败');
        }
    }

}