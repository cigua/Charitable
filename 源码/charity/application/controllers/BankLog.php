<?php

/**
 * 提现记录
 *
 * @author: lindexin
 * @since : 2016/06/27
 */

class BankLogController extends BaseController {

    private $_pageSize;
    private $_model;

    private $_type = array(
        1 => '机构申请',
        2 => '个人申请'
    );

    private function init() {
        $this->_model = new BankLogModel();
        $this->_pageSize = 12;
    }

    public function indexAction($page=1) {
        $this->initPageTitle('提现分享记录');


        $type = isset($_GET['type']) ? intval($_GET['type']) : '';
        $page   = intval($page);

        //模型和控制器
        $baseUrl = '/' . $this->getRequest()->getControllerName() . '/';

        //分页参数，读取参数设置
        $where      = array('type'=>$type);
        $pagination = array('page'=>$page, 'pagesize'=>$this->_pageSize);

        //做分页
        $total    = $this->_model->countData($where);
        $pageUrl  = $baseUrl .  'index/';
        $pageCode = $this->setPage($page, $this->_pageSize, $total, strtolower($pageUrl));

        //数据列表
        $data = $this->_model->getList( $where, $pagination );

        $data = CompanyModel::getInstance()->mergeData($data,'bl_mid');
		$cashInfo = CashsModel::getInstance()->getInfo(array('ca_type' => 1,'ca_mid' => A_ROLE));
        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'data'      => $data,
            'type'      => $type,
            'total'     => $total,
            'page'      => $pageCode,
			'cashInfo' => $cashInfo,
            'typeOption' => Helper_Form::option($this->_type, intval($type), '请选择提现角色'),
        ));
    }
	
	public function formAction(){
		
	}
}