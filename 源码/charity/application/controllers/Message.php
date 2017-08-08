<?php

/**
 * 慈善留言管理
 *
 * @author: lindexin
 * @since : 2016/06/27
 */

class MessageController extends BaseController {

    private $_pageSize;
    private $_model;

    private function init() {
        $this->_model = new MessageModel();
        $this->_pageSize = 12;
    }

    public function indexAction($page=1) {

        $this->initPageTitle('留言列表');
        $title   = isset($_GET['title']) ? Helper_Filter::format($_GET['title']) : '';
        $did    = isset($_GET['did']) ? intval($_GET['did']) : '';
        $page   = intval($page);

        //模型和控制器
        $baseUrl = '/' . $this->getRequest()->getControllerName() . '/';

        //分页参数，读取参数设置
        $where      = array('title'=>$title, 'did' => $did);
        $pagination = array('page'=>$page, 'pagesize'=>$this->_pageSize);

        //做分页
        $total    = $this->_model->countData($where);
        $pageUrl  = $baseUrl .  'index/';
        $pageCode = $this->setPage($page, $this->_pageSize, $total, strtolower($pageUrl));

        $data = $this->_model->getList( $where, $pagination );
        $data = DonationModel::getInstance()->mergData($data );

        //慈善项目
        $donationData = DonationModel::getInstance()->getDonationOption();
        $donationOption = Helper_Form::option($donationData,$did,'请选择慈善项目');
        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'title'      => $title,
            'data'      => $data,
            'total'     => $total,
            'page'      => $pageCode,
            'donationOption'      => $donationOption,
            'donationData'      => $donationData,
            'cateList' => $this->_type,
        ));
    }
}