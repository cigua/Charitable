<?php

/**
 * 官网首页
 *
 * @author: monyyip
 * @since : 2016/06/05 16:43
 */

class NewsController extends BaseController {
    private $_pageSize = 8;
    public function indexAction() {
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $type = isset($_GET['type']) ? Helper_Filter::format($_GET['type'], FALSE, TRUE) : '';
        // 获得机构信息
        $companyInfo = CompanyModel::getInstance()->getInfo($id);
        if(empty($companyInfo)){
            $this->redirect('/index');
        }

        $where = array(
            'c_id' => $id
        );

        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $pagination = array('page' => $page, 'pagesize' => $this->_pageSize);

        $newsList = ArticleModel::getInstance()->getList($where, $pagination);
        if($type == 'load'){
            if(empty($newsList)){
                return FALSE;
            }

            $this->getView()->assign('data', $newsList);
            $this->getView()->display('/donation/load.html');
            die;
        }

        $count = ArticleModel::getInstance()->countData($where);
        $this->getView()->assign(array(
            'id' => $id,
            'data' => $newsList,
            'companyInfo' => $companyInfo,
            'count' => $count,
            'pagesize' => $this->_pageSize

        ));
    }

    public function detailsAction($id = 0){
   //     $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $info = ArticleModel::getInstance()->getInfo($id);
        $companyInfo = CompanyModel::getInstance()->getInfo($info['c_id']);
        // 增加动态显示
        ArticleModel::getInstance()->addView($id);
        $jsSdk = new Open_Weixin_Js();
        $signPackage = $jsSdk->GetSignPackage();
        // 获得分享配置
        $shareConfig = ShareModel::getInstance()->getOne(array('type' => 1));
        $this->getView()->assign(array(
                'signPackage' => $signPackage,
                'info' => $info,
                'companyInfo' => $companyInfo,
                'shareConfig' => $shareConfig
        ));
    }
}