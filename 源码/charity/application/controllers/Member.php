<?php

/**
 * 前台用户
 *
 * @author: lindexin
 * @since : 2016/06/27
 */

class MemberController extends BaseController {

    private $_pageSize;
    private $_model;
    private $_type = array(1=>'捐赠箱');
    private $_anonymous = array(1=>'正常',2=>'匿名');

    private function init() {
        $this->_model = new MemberModel();
        $this->_pageSize = 12;
    }

    public function indexAction($page=1) {
        $this->initPageTitle('用户列表');

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
        $data = CashsModel::getInstance()->mergData($data,'m_id',2);//2为用户id

        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'name'      => $name,
            'data'      => $data,
            'total'     => $total,
            'page'      => $pageCode
        ));
    }

    public function listAction($page=1) {
        $this->initPageTitle('捐赠列表');

        $type   = isset($_GET['type']) ? Helper_Filter::format($_GET['type']) : '';
        $page   = intval($page);

        //模型和控制器
        $baseUrl = '/' . $this->getRequest()->getControllerName() . '/';

        //分页参数，读取参数设置
        $where      = array('type'=>$type);
        $pagination = array('page'=>$page, 'pagesize'=>$this->_pageSize);

        //做分页
        $total    = ContributeModel::getInstance()->countData($where);
        $pageUrl  = $baseUrl .  'list/';
        $pageCode = $this->setPage($page, $this->_pageSize, $total, strtolower($pageUrl));

        //数据列表
        $data = ContributeModel::getInstance()->getList( $where, $pagination );

        $data = DonationModel::getInstance()->mergData($data,'d_id');

        //模版赋值
        $this->getView()->assign(array(
            'baseUrl'   => $baseUrl,
            'data'      => $data,
            'total'     => $total,
            'page'      => $pageCode
        ));
    }

    //添加/编辑捐赠记录
    public function addlogAction($id=0) {
        $id = intval($id);

        $row = array();
        if($id > 0) {
            $row  = ContributeModel::getInstance()->getInfo($id);
        }else{
            $row = array(
                'c_id' => '',
                'c_type' => '',
                'c_name' => '',
                'c_mid' => '',
                'd_id' => '',
                'c_price' => '',
                'c_content' => '',
                'c_anonymous' => '',
                'c_status' => '',
                'c_addtime' => '',
            );
        }

        //所在善筹
        $donationList    = DonationModel::getInstance()->getdonationOption();
        $donationOpiton  = Helper_Form::option($donationList, intval($row['d_id']), '请选择所在善筹');
        $typeOption      = Helper_Form::option($this->_type, intval($row['c_type']), '请选择捐赠类型');
        $anonymousOption = Helper_Form::option($this->_anonymous, intval($row['c_anonymous']), '请选择显示类型');
		$companyList = CompanyModel::getInstance()->getCompanyOption();
        $companyOption = Helper_Form::option($companyList, intval($type), '请选择机构');
        $this->getView()->assign(array(
            'row'=> $row,
            'typeOption'=>$typeOption,
			'companyOption' => $companyOption,
            'anonymousOption'=>$anonymousOption,
            'donationOpiton'=>$donationOpiton,
        ));
    }

}