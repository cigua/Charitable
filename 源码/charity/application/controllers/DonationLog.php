<?php

/**
 * 慈善分享记录
 *
 * @author: lindexin
 * @since : 2016/06/27
 */

class DonationLogController extends BaseController {

    private $_pageSize;
    private $_model;

    private function init() {
        $this->_model = new DonationLogModel();
        $this->_pageSize = 12;
    }

    public function indexAction($page=1) {
        $this->initPageTitle('慈善分享记录');

        $name   = isset($_GET['name']) ? Helper_Filter::format($_GET['name']) : '';
        $page   = intval($page);

        //模型和控制器
        $baseUrl = '/' . $this->getRequest()->getControllerName() . '/';

        //分页参数，读取参数设置
        $where      = array('username'=>$name);
        $pagination = array('page'=>$page, 'pagesize'=>$this->_pageSize);

        //做分页
        $total    = $this->_model->countData($where);
        $pageUrl  = $baseUrl .  'index/';
        $pageCode = $this->setPage($page, $this->_pageSize, $total, strtolower($pageUrl));

        //数据列表
        $data = $this->_model->getList( $where, $pagination );
        $data = MemberModel::getInstance()->mergData($data,'m_id');

        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'name'      => $name,
            'data'      => $data,
            'total'     => $total,
            'page'      => $pageCode
        ));
    }
}