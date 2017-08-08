<?php

/**
 * 官网首页
 *
 * @author: monyyip
 * @since : 2016/06/05 16:43
 */

class IndexController extends BaseController {
    private $_pageSize = 8;

    public function indexAction() {
        $search = isset($_GET['search']) ? Helper_Filter::format($_GET['search']) : '';
        $prov_city = isset($_GET['city']) ? Helper_Filter::format($_GET['city']) : '';
        $type = isset($_GET['type']) ? Helper_Filter::format($_GET['type']) : '';
        //模型和控制器
        $baseUrl = '/' . $this->getRequest()->getControllerName() . '/';
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $pagination = array('page' => $page, 'pagesize' => $this->_pageSize);

        // 更新用户信息
        if($prov_city){
            $data = array(
                'm_city' => $prov_city
            );

            MemberModel::getInstance()->saveData($data, M_ID);
        }else{
            $memberInfo = MemberModel::getInstance()->getInfo(M_ID);
            $prov_city = $memberInfo['m_city'];
        }

        if($prov_city){
            list($prov, $city) = explode(' ', $prov_city);
        }else{
            $prov = $city = '';
        }

        $where = array(
            'title' => $search,
            'prov'  => $prov,
            'city'  => $city,
        );

        //做分页
        $total    = CompanyModel::getInstance()->countData($where);
        $pageUrl  = $baseUrl .  'index/';
        $pageCode = $this->setPage($page, $this->_pageSize, $total, strtolower($pageUrl));
        $data = CompanyModel::getInstance()->getList($where, $pagination);

        if($type == 'load'){
            $this->getView()->assign('data', $data);
            $this->getView()->display('/index/load.html');
            exit();
        }
// 获得分享配置
                $shareConfig = ShareModel::getInstance()->getOne(array('type' => 3));
				$jsSdk = new Open_Weixin_Js();
                $signPackage = $jsSdk->GetSignPackage();

        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'search'     => $search,
            'data'      => $data,
            'total'     => $total,
            'pageSize'  => $this->_pageSize,
            'page'      => $pageCode,
            'prov_city' => $prov_city,
			'shareConfig' => $shareConfig,
			'signPackage' => $signPackage,		
            'type' => $type,
            'city' => $city,
            'prov' => $prov
        ));

        $this->getView()->display('/index/index.html');
        exit();
    }

}