<?php

/**
 * 小区管理员
 *
 * @author: moxiaobai
 * @since : 2016/2/1 17:19
 */

class ShareController extends BaseController
{

    //初始化
    private function init()
    {
        $this->isAjaxRequest();
        $this->isLogin();
        Yaf_Dispatcher::getInstance()->disableView();
    }

    //新增保存数据
    public function saveAction() {
        $id  = intval( $_POST['id'] );

        // 基本数据过滤
        $data  = $this->getRequest()->getPost();
        unset($data['id']);
        if($id > 0) {
            $result = ShareModel::getInstance()->saveData($data, $id);
        } else {
            $result = ShareModel::getInstance()->saveData($data);
        }

        if($result) {
            Helper_Json::formJson('操作成功', 'y');
        } else {
            Helper_Json::formJson('操作失败');
        }
    }



}